$(function() {
    //FUNGSI SEARCH BELOM, ARGH DEADLINE
    
    window.getImunisasi = (id) => {
        $.getJSON('imunisasi/get/' + id, (data) => {
            $('#formUpdateImunisasi #idVaksin').val(data['id']);
            $('#formUpdateImunisasi #namaVaksin').val(data['nama']);
            $('#formUpdateImunisasi #deskripsiVaksin').text(data['deskripsi']);
            $('#formUpdateImunisasi #syaratUmur').val(data['syarat_umur']);
            $('#formUpdateImunisasi #periodeVaksin').val(data['periode']);
            $('#formUpdateImunisasi #idKader').val(data['id_kader']);
        });
    };
    
    window.getAnakByIbu = (id) => {
        $.getJSON('ibu/list_anak/' + id, (data) => {
            $('#lihatAnak tbody').html('');
            var i = 1;
            for (var row of data) {
                $('#lihatAnak tbody').append(`
                 <tr>
                  <th scope="row">${i}</th>
                  <td>${row['nama']}</td>
                  <td>${row['tanggal_lahir']}</td>
                  <td>${row['berat_badan']}</td>
                </tr>
                `);
                i += 1;
            };
        });
    };
    
    window.getIbu = (id) => {
        $.getJSON('ibu/get/' + id, (data) => {
            $('#formUpdateIbu #idIbu').val(data['id']);
            $('#formUpdateIbu #namaIbu').val(data['nama']);
            $('#formUpdateIbu #alamatIbu').text(data['alamat']);
        });
    };
    
    window.getAnak = (id) => {
        $.getJSON('anak/get/' + id, (data) => {
            $('#formUpdateAnak #idAnak').val(data['id']);
            $('#formUpdateAnak #namaAnak').val(data['nama']);
            $('#formUpdateAnak #bbAnak').val(data['berat_badan']);
            $('#formUpdateAnak #ttl').val(data['tanggal_lahir']);
            $('#formUpdateAnak #ttl1').val(data['tempat_lahir']);
            $('#formUpdateAnak #idIbu').val(data['id_ibu']);
        });
    };
    
    window.getHistoryVaksinByAnak = (id) => {
        $.getJSON('anak/history_vaksin/' + id, (data) => {
            $('#historyVaksin tbody').html('');
            for (var row of data) {
                $('#historyVaksin tbody').append(`
                <tr>
                  <th scope="row">${row['id']}</th>
                  <td>${row['tanggal']}</td>
                  <td>${row['id_imunisasi']}</td>
                  <td><a type="button" class="btn btn-danger" href="anak/deleteVaksin/${row['id']}" onClick="return confirm('Apakah Anda Yakin?')" >Delete</a></td>
                </tr>
                `);
            };
        });
    };

    window.searchImunisasi = () => {
        var keyword = $('#formSearchImunisasi #keyword').val();
        $.getJSON('imunisasi/search/' + keyword, (data) => {
            $('#v-pills-imunisasi tbody').html('');
            for (var row of data) {
                $('#v-pills-imunisasi tbody').append(`
                <tr>
                  <th scope="row">${row['id']}</th>
                  <td>${row['nama']}</td>
                  <td>${row['syarat_umur']}</td>
                  <td>${row['deskripsi']}</td>
                  <td>${row['periode']}</td>
                  <td>${row['id_kader']}</td>
                  <td>
                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#updateImunisasi" onclick="getImunisasi(${row['id']})">Edit</button>
                    <button type="button" class="btn btn-danger" href="imunisasi/delete/${row['id']}" onClick="return confirm('Apakah Anda Yakin?')" >Delete</button>
                  </td>
                </tr>
                `);
            };
        });
    };
    
    window.searchIbu = () => {
        var keyword = $('#formSearchIbu #keyword').val();
        $.getJSON('ibu/search/' + keyword, (data) => {
            $('#v-pills-ibu tbody').html('');
            for (var row of data) {
                $('#v-pills-ibu tbody').append(`
                <tr>
                  <th scope="row">${row['id']}</th>
                  <td>${row['nama']}</td>
                  <td>${row['alamat']}</td>
                  <td>${row['email']}</td>
                  <td>${row['password']}</td>
                  <td>
                    <button type="button" class="btn btn-outline-info" data-toggle="modal" data-target="#lihatAnak" onclick="getAnakByIbu(${row['id']})">Lihat</button>
                  </td>
                  <td>
                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#updateIbu" onclick="getIbu(${row['id']})">Edit</button>
                    <button type="button" class="btn btn-danger" href="ibu/delete/${row['id']}" onClick="return confirm('Apakah Anda Yakin?')" >Delete</button>
                  </td>
                </tr>
                `);
            };
        });
    };

    window.searchAnak = () => {
        var keyword = $('#formSearchAnak #keyword').val();
        $.getJSON('anak/search/' + keyword, (data) => {
            $('#v-pills-anak tbody').html('');
            for (var row of data) {
                $('#v-pills-anak tbody').append(`
                <tr>
                  <th scope="row">${row['id']}</th>
                  <td>${row['nama']}</td>
                  <td>${row['tempat_lahir']}</td>
                  <td>${row['tanggal_lahir']}</td>
                  <td>${row['berat_badan']}</td>
                  <td>${row['id_ibu']}</td>
                  <td>
                    <button type="button" class="btn btn-outline-info" data-toggle="modal" data-target="#historyVaksin" onclick="getHistoryVaksinByAnak(${row['id']})">Lihat</button>
                  </td>
                  <td>
                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#updateAnak" onclick="getAnak(${row['id']})">Edit</button>
                    <button type="button" class="btn btn-danger" href="anak/delete/${row['id']}" onClick="return confirm('Apakah Anda Yakin?')" >Delete</button>
                  </td>
                </tr>
                `);
            };
        });
    };

    window.searchAntrian = () => {
        var keyword = $('#formSearchAntrian #keyword').val();
        $.getJSON('antrian/search/' + keyword, (data) => {
            $('#v-pills-antrian tbody').html('');
            for (var row of data) {
                $('#v-pills-antrian tbody').append(`
                <tr>
                  <th scope="row">${row['id']}</th>
                  <td>${row['waktu']}</td>
                  <td>${row['id_ibu']}</td>
                  <td>
                    <button type="button" class="btn btn-danger" href="antrian/delete/${row['id']}" onClick="return confirm('Apakah Anda Yakin?')" >Delete</button>
                  </td>
                </tr>
                `);
            };
        });
    };

    window.setAnakOnUpdateVaksin = (id) => {
        $('#formUpdateVaksinAnak #idAnak').val(id);
    };
});