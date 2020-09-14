/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package enkapsulasi;

/**
 *
 * @author CIWA
 */
class enkapsulasi{
    private String nama;
    private int umur;
public int get_umur(){//membaca umur
    return umur;
}
public String get_nama(){//membaca nama
    return nama;
}
public void set_umur(int umur_baru){//tulis umur
    umur=umur_baru;
}
    public void set_nama(String nama_baru){//tulis umur
    nama=nama_baru;
    }
}
public class main{
    public static void main (String[] args){
        enkapsulasi obj=new enkapsulasi();
        
        obj.set_nama("Dewa");
        obj.set_umur(17);
        
        System.out.println("nama : "+obj.get_nama());
        System.out.println("umur : "+obj.get_umur());
    }
}