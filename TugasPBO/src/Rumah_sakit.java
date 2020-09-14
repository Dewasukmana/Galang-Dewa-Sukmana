

/**
 *
 * @author CIWA
 */
public class Rumah_sakit {
    int pasien=0;
    
    void buka(){
        System.out.println("rumah sakit telah dibuka");
    }
    void setTambah(int tambahpasien){
        pasien = pasien + tambahpasien;
    }
    void setKurang(int kurangpasien){
        pasien = pasien - kurangpasien;
        System.out.println("pasien telah diobati   :"+kurangpasien);
    }
    int getpasien(){
        return pasien;
    }
    void tutup(){
        System.out.println("rumah sakit telah ditutup");
    }
}
