

/**
 *
 * @author CIWA
 */
public class action {
    public static void main(String [] args){
        Rumah_sakit pks =new Rumah_sakit();
        
        pks.buka();
        pks.setTambah(10);
        System.out.println("pasien sekarang   :"+pks.getpasien());
        pks.setKurang(7);
        System.out.println("pasien sekarang   :"+pks.getpasien());
        pks.tutup();
    }
    
}
