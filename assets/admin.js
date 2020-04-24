$(function() {
    //FUNGSI SEARCH BELOM, ARGH DEADLINE
    
    window.getImunisasi = (id) => {
        $.getJSON('admin/imunisasi/get/' + id, (data) => {
            $('#formUpdateImunisasi #idVaksin').val(data['id']);
            $('#formUpdateImunisasi #namaVaksin').val(data['nama']);
            $('#formUpdateImunisasi #deskripsiVaksin').text(data['deskripsi']);
            $('#formUpdateImunisasi #syaratUmur').val(data['syarat_umur']);
            $('#formUpdateImunisasi #periodeVaksin').val(data['periode']);
            $('#formUpdateImunisasi #idKader').val(data['id_kader']);
        });
    };
    
    window.getAnakByIbu = (id) => {
        $.getJSON('admin/ibu/list_anak/' + id, (data) => {
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
        $.getJSON('admin/ibu/get/' + id, (data) => {
            $('#formUpdateIbu #idIbu').val(data['id']);
            $('#formUpdateIbu #namaIbu').val(data['nama']);
            $('#formUpdateIbu #alamatIbu').text(data['alamat']);
        });
    };
    
    window.getHistoryVaksinByAnak = (id) => {
        $.getJSON('admin/anak/history_vaksin/' + id, (data) => {
            $('#historyVaksin tbody').html('');
            for (var row of data) {
                $('#historyVaksin tbody').append(`
                 <tr>
                  <th scope="row">${row['id']}</th>
                  <td>${row['tanggal']}</td>
                  <td>${row['id_imunisasi']}</td>
                  <td><button type="button" class="btn btn-danger" href="#modul delete php" onClick="return confirm('Apakah Anda Yakin?')" >Delete</button></td>
                </tr>
                `);
            };
        });
    };     
});