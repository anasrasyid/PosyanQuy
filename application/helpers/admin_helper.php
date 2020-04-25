<?php
    $CI =& get_instance();
    
    function getNamaIbu($id) {
        global $CI;
        return $CI->db->get_where('ibu', ['id' => $id])->row()->nama;
    }
    
    function getNamaVaksin($id) {
        global $CI;
        return $CI->db->get_where('imunisasi', ['id' => $id])->row()->nama;
    }
    
    function getNamaAnak($id) {
        global $CI;
        return $CI->db->get_where('anak', ['id' => $id])->row()->nama;
    }
?>