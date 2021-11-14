<?php 
 
class M_data extends CI_Model{
	function tampil_data(){
		return $this->db->get('dataset');
	}

    function jumlah_user() {
        {
            $query=$this->db->query("SELECT COUNT(cabang_belajar) AS jumlah_user FROM dataset WHERE cabang_belajar='A'");
            if($query->num_rows()>0)
            {
                $reqord=$query->row();
                $query->free_result();
                }
            else
                {
                $data=NULL;
                }
            return $reqord;
            }
		}

        function sudah_lunas() {
            {
                $query=$this->db->query("SELECT COUNT(cabang_belajar) AS sudah_lunas FROM dataset WHERE cabang_belajar='A'and (angsuran1+angsuran2)=(total_biaya-potongan)");
                if($query->num_rows()>0)
                {
                    $reqord=$query->row();
                    $query->free_result();
                    }
                else
                    {
                    $data=NULL;
                    }
                return $reqord;
                }
            }

            function belum_lunas() {
                {
                    $query=$this->db->query("SELECT COUNT(cabang_belajar) AS belum_lunas FROM dataset WHERE cabang_belajar='A'and (angsuran1+angsuran2)<(total_biaya-potongan)");
                    if($query->num_rows()>0)
                    {
                        $reqord=$query->row();
                        $query->free_result();
                        }
                    else
                        {
                        $data=NULL;
                        }
                    return $reqord;
                    }
                }

                function total() {
                    {
                        $query=$this->db->query("SELECT sum(total_biaya)-sum(potongan) as total from dataset where cabang_belajar='A'");
                        if($query->num_rows()>0)
                        {
                            $reqord=$query->row();
                            $query->free_result();
                            }
                        else
                            {
                            $data=NULL;
                            }
                        return $reqord;
                        }
                    }

                    function sudah_bayar() {
                        {
                            $query=$this->db->query("SELECT sum(angsuran1)+sum(angsuran2) as sudah_bayar from dataset where cabang_belajar='A'");
                            if($query->num_rows()>0)
                            {
                                $reqord=$query->row();
                                $query->free_result();
                                }
                            else
                                {
                                $data=NULL;
                                }
                            return $reqord;
                            }
                        }

                    
                        function belum_bayar() {
                            {
                                $query=$this->db->query("SELECT (sum(total_biaya)-sum(potongan))-(sum(angsuran1)+sum(angsuran2)) as belum_bayar from dataset where cabang_belajar='A'");
                                if($query->num_rows()>0)
                                {
                                    $reqord=$query->row();
                                    $query->free_result();
                                    }
                                else
                                    {
                                    $data=NULL;
                                    }
                                return $reqord;
                                }
                            }

                            function sudah_bayar50() {
                                {
                                    $query=$this->db->query("SELECT COUNT(cabang_belajar) AS sudah_bayar50 FROM dataset WHERE cabang_belajar='A'and (angsuran1+angsuran2)>=((total_biaya-potongan)/2)");
                                    if($query->num_rows()>0)
                                    {
                                        $reqord=$query->row();
                                        $query->free_result();
                                        }
                                    else
                                        {
                                        $data=NULL;
                                        }
                                    return $reqord;
                                    }
                                }

                                function belum_bayar50() {
                                    {
                                        $query=$this->db->query("SELECT COUNT(cabang_belajar) AS belum_bayar50 FROM dataset WHERE cabang_belajar='A'and (angsuran1+angsuran2)<((total_biaya-potongan)/2)");
                                        if($query->num_rows()>0)
                                        {
                                            $reqord=$query->row();
                                            $query->free_result();
                                            }
                                        else
                                            {
                                            $data=NULL;
                                            }
                                        return $reqord;
                                        }
                                    }

         function jumlah_user2() {
        {
            $query=$this->db->query("SELECT COUNT(cabang_belajar) AS jumlah_user2 FROM dataset WHERE cabang_belajar='B'");
            if($query->num_rows()>0)
            {
                $reqord=$query->row();
                $query->free_result();
                }
            else
                {
                $data=NULL;
                }
            return $reqord;
            }
		}

        function sudah_lunas2() {
            {
                $query=$this->db->query("SELECT COUNT(cabang_belajar) AS sudah_lunas2 FROM dataset WHERE cabang_belajar='B'and (angsuran1+angsuran2)=(total_biaya-potongan)");
                if($query->num_rows()>0)
                {
                    $reqord=$query->row();
                    $query->free_result();
                    }
                else
                    {
                    $data=NULL;
                    }
                return $reqord;
                }
            }

            function belum_lunas2() {
                {
                    $query=$this->db->query("SELECT COUNT(cabang_belajar) AS belum_lunas2 FROM dataset WHERE cabang_belajar='B'and (angsuran1+angsuran2)<(total_biaya-potongan)");
                    if($query->num_rows()>0)
                    {
                        $reqord=$query->row();
                        $query->free_result();
                        }
                    else
                        {
                        $data=NULL;
                        }
                    return $reqord;
                    }
                }

                function total2() {
                    {
                        $query=$this->db->query("SELECT sum(total_biaya)-sum(potongan) as total2 from dataset where cabang_belajar='B'");
                        if($query->num_rows()>0)
                        {
                            $reqord=$query->row();
                            $query->free_result();
                            }
                        else
                            {
                            $data=NULL;
                            }
                        return $reqord;
                        }
                    }

                    function sudah_bayar2() {
                        {
                            $query=$this->db->query("SELECT sum(angsuran1)+sum(angsuran2) as sudah_bayar2 from dataset where cabang_belajar='B'");
                            if($query->num_rows()>0)
                            {
                                $reqord=$query->row();
                                $query->free_result();
                                }
                            else
                                {
                                $data=NULL;
                                }
                            return $reqord;
                            }
                        }

                    
                        function belum_bayar2() {
                            {
                                $query=$this->db->query("SELECT (sum(total_biaya)-sum(potongan))-(sum(angsuran1)+sum(angsuran2)) as belum_bayar2 from dataset where cabang_belajar='B'");
                                if($query->num_rows()>0)
                                {
                                    $reqord=$query->row();
                                    $query->free_result();
                                    }
                                else
                                    {
                                    $data=NULL;
                                    }
                                return $reqord;
                                }
                            }

                            function sudah_bayar502() {
                                {
                                    $query=$this->db->query("SELECT COUNT(cabang_belajar) AS sudah_bayar502 FROM dataset WHERE cabang_belajar='B'and (angsuran1+angsuran2)>=((total_biaya-potongan)/2)");
                                    if($query->num_rows()>0)
                                    {
                                        $reqord=$query->row();
                                        $query->free_result();
                                        }
                                    else
                                        {
                                        $data=NULL;
                                        }
                                    return $reqord;
                                    }
                                }

                                function belum_bayar502() {
                                    {
                                        $query=$this->db->query("SELECT COUNT(cabang_belajar) AS belum_bayar502 FROM dataset WHERE cabang_belajar='B'and (angsuran1+angsuran2)<((total_biaya-potongan)/2)");
                                        if($query->num_rows()>0)
                                        {
                                            $reqord=$query->row();
                                            $query->free_result();
                                            }
                                        else
                                            {
                                            $data=NULL;
                                            }
                                        return $reqord;
                                        }
                                    }
            function jumlah_user3() {
                                        {
                                            $query=$this->db->query("SELECT COUNT(cabang_belajar) AS jumlah_user3 FROM dataset WHERE cabang_belajar='C'");
                                            if($query->num_rows()>0)
                                            {
                                                $reqord=$query->row();
                                                $query->free_result();
                                                }
                                            else
                                                {
                                                $data=NULL;
                                                }
                                            return $reqord;
                                            }
                                        }
                                
                                        function sudah_lunas3() {
                                            {
                                                $query=$this->db->query("SELECT COUNT(cabang_belajar) AS sudah_lunas3 FROM dataset WHERE cabang_belajar='C'and (angsuran1+angsuran2)=(total_biaya-potongan)");
                                                if($query->num_rows()>0)
                                                {
                                                    $reqord=$query->row();
                                                    $query->free_result();
                                                    }
                                                else
                                                    {
                                                    $data=NULL;
                                                    }
                                                return $reqord;
                                                }
                                            }
                                
                                            function belum_lunas3() {
                                                {
                                                    $query=$this->db->query("SELECT COUNT(cabang_belajar) AS belum_lunas3 FROM dataset WHERE cabang_belajar='C'and (angsuran1+angsuran2)<(total_biaya-potongan)");
                                                    if($query->num_rows()>0)
                                                    {
                                                        $reqord=$query->row();
                                                        $query->free_result();
                                                        }
                                                    else
                                                        {
                                                        $data=NULL;
                                                        }
                                                    return $reqord;
                                                    }
                                                }
                                
                                                function total3() {
                                                    {
                                                        $query=$this->db->query("SELECT sum(total_biaya)-sum(potongan) as total3 from dataset where cabang_belajar='C'");
                                                        if($query->num_rows()>0)
                                                        {
                                                            $reqord=$query->row();
                                                            $query->free_result();
                                                            }
                                                        else
                                                            {
                                                            $data=NULL;
                                                            }
                                                        return $reqord;
                                                        }
                                                    }
                                
                                                    function sudah_bayar3() {
                                                        {
                                                            $query=$this->db->query("SELECT sum(angsuran1)+sum(angsuran2) as sudah_bayar3 from dataset where cabang_belajar='C'");
                                                            if($query->num_rows()>0)
                                                            {
                                                                $reqord=$query->row();
                                                                $query->free_result();
                                                                }
                                                            else
                                                                {
                                                                $data=NULL;
                                                                }
                                                            return $reqord;
                                                            }
                                                        }
                                
                                                    
                                                        function belum_bayar3() {
                                                            {
                                                                $query=$this->db->query("SELECT (sum(total_biaya)-sum(potongan))-(sum(angsuran1)+sum(angsuran2)) as belum_bayar3 from dataset where cabang_belajar='C'");
                                                                if($query->num_rows()>0)
                                                                {
                                                                    $reqord=$query->row();
                                                                    $query->free_result();
                                                                    }
                                                                else
                                                                    {
                                                                    $data=NULL;
                                                                    }
                                                                return $reqord;
                                                                }
                                                            }
                                
                                                            function sudah_bayar503() {
                                                                {
                                                                    $query=$this->db->query("SELECT COUNT(cabang_belajar) AS sudah_bayar503 FROM dataset WHERE cabang_belajar='C'and (angsuran1+angsuran2)>=((total_biaya-potongan)/2)");
                                                                    if($query->num_rows()>0)
                                                                    {
                                                                        $reqord=$query->row();
                                                                        $query->free_result();
                                                                        }
                                                                    else
                                                                        {
                                                                        $data=NULL;
                                                                        }
                                                                    return $reqord;
                                                                    }
                                                                }
                                
                                                                function belum_bayar503() {
                                                                    {
                                                                        $query=$this->db->query("SELECT COUNT(cabang_belajar) AS belum_bayar503 FROM dataset WHERE cabang_belajar='C'and (angsuran1+angsuran2)<((total_biaya-potongan)/2)");
                                                                        if($query->num_rows()>0)
                                                                        {
                                                                            $reqord=$query->row();
                                                                            $query->free_result();
                                                                            }
                                                                        else
                                                                            {
                                                                            $data=NULL;
                                                                            }
                                                                        return $reqord;
                                                                        }
                                                                    }              
                
        function jumlah_user4() {
                                                                        {
                                                                            $query=$this->db->query("SELECT COUNT(cabang_belajar) AS jumlah_user4 FROM dataset WHERE cabang_belajar='D'");
                                                                            if($query->num_rows()>0)
                                                                            {
                                                                                $reqord=$query->row();
                                                                                $query->free_result();
                                                                                }
                                                                            else
                                                                                {
                                                                                $data=NULL;
                                                                                }
                                                                            return $reqord;
                                                                            }
                                                                        }
                                                                
                                                                        function sudah_lunas4() {
                                                                            {
                                                                                $query=$this->db->query("SELECT COUNT(cabang_belajar) AS sudah_lunas4 FROM dataset WHERE cabang_belajar='D'and (angsuran1+angsuran2)=(total_biaya-potongan)");
                                                                                if($query->num_rows()>0)
                                                                                {
                                                                                    $reqord=$query->row();
                                                                                    $query->free_result();
                                                                                    }
                                                                                else
                                                                                    {
                                                                                    $data=NULL;
                                                                                    }
                                                                                return $reqord;
                                                                                }
                                                                            }
                                                                
                                                                            function belum_lunas4() {
                                                                                {
                                                                                    $query=$this->db->query("SELECT COUNT(cabang_belajar) AS belum_lunas4 FROM dataset WHERE cabang_belajar='D'and (angsuran1+angsuran2)<(total_biaya-potongan)");
                                                                                    if($query->num_rows()>0)
                                                                                    {
                                                                                        $reqord=$query->row();
                                                                                        $query->free_result();
                                                                                        }
                                                                                    else
                                                                                        {
                                                                                        $data=NULL;
                                                                                        }
                                                                                    return $reqord;
                                                                                    }
                                                                                }
                                                                
                                                                                function total4() {
                                                                                    {
                                                                                        $query=$this->db->query("SELECT sum(total_biaya)-sum(potongan) as total4 from dataset where cabang_belajar='D'");
                                                                                        if($query->num_rows()>0)
                                                                                        {
                                                                                            $reqord=$query->row();
                                                                                            $query->free_result();
                                                                                            }
                                                                                        else
                                                                                            {
                                                                                            $data=NULL;
                                                                                            }
                                                                                        return $reqord;
                                                                                        }
                                                                                    }
                                                                
                                                                                    function sudah_bayar4() {
                                                                                        {
                                                                                            $query=$this->db->query("SELECT sum(angsuran1)+sum(angsuran2) as sudah_bayar4 from dataset where cabang_belajar='D'");
                                                                                            if($query->num_rows()>0)
                                                                                            {
                                                                                                $reqord=$query->row();
                                                                                                $query->free_result();
                                                                                                }
                                                                                            else
                                                                                                {
                                                                                                $data=NULL;
                                                                                                }
                                                                                            return $reqord;
                                                                                            }
                                                                                        }
                                                                
                                                                                    
                                                                                        function belum_bayar4() {
                                                                                            {
                                                                                                $query=$this->db->query("SELECT (sum(total_biaya)-sum(potongan))-(sum(angsuran1)+sum(angsuran2)) as belum_bayar4 from dataset where cabang_belajar='D'");
                                                                                                if($query->num_rows()>0)
                                                                                                {
                                                                                                    $reqord=$query->row();
                                                                                                    $query->free_result();
                                                                                                    }
                                                                                                else
                                                                                                    {
                                                                                                    $data=NULL;
                                                                                                    }
                                                                                                return $reqord;
                                                                                                }
                                                                                            }
                                                                
                                                                                            function sudah_bayar504() {
                                                                                                {
                                                                                                    $query=$this->db->query("SELECT COUNT(cabang_belajar) AS sudah_bayar504 FROM dataset WHERE cabang_belajar='D'and (angsuran1+angsuran2)>=((total_biaya-potongan)/2)");
                                                                                                    if($query->num_rows()>0)
                                                                                                    {
                                                                                                        $reqord=$query->row();
                                                                                                        $query->free_result();
                                                                                                        }
                                                                                                    else
                                                                                                        {
                                                                                                        $data=NULL;
                                                                                                        }
                                                                                                    return $reqord;
                                                                                                    }
                                                                                                }
                                                                
                                                                                                function belum_bayar504() {
                                                                                                    {
                                                                                                        $query=$this->db->query("SELECT COUNT(cabang_belajar) AS belum_bayar504 FROM dataset WHERE cabang_belajar='D'and (angsuran1+angsuran2)<((total_biaya-potongan)/2)");
                                                                                                        if($query->num_rows()>0)
                                                                                                        {
                                                                                                            $reqord=$query->row();
                                                                                                            $query->free_result();
                                                                                                            }
                                                                                                        else
                                                                                                            {
                                                                                                            $data=NULL;
                                                                                                            }
                                                                                                        return $reqord;
                                                                                                        }
                                                                                                    }
                                                                
                       
}
// SELECT cabang_belajar, COUNT(user_id) AS jumlahuser FROM dataset WHERE cabang_belajar='A' GROUP BY cabang_belajar