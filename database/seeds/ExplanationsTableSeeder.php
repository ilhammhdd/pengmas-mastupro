<?php

use App\Explanation;
use Illuminate\Database\Seeder;

class ExplanationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $explanation = new Explanation();
        $explanation->dominan = 'DC';
        $explanation->tujuan = 'Kemandirian, pencapaian pribadi';
        $explanation->menilai_orang_dari = 'Kompetensi, nalar';
        $explanation->mempengaruhi_orang_dari = 'Standar tinggi, tekad';
        $explanation->sering = 'Terang-terangan; sarkasme atau perilaku merendahkan';
        $explanation->dibawah_tekanan = 'Menjadi kritis secara berlebihan';
        $explanation->ketakutan = 'Kegagalan mencapai standar mereka';
        $explanation->meningkatkan_efektifitas_melalui = 'Kehangatan, komunikasi bijaksana';
        $explanation->penjelasan = "Orang dengan style DC memprioritaskan tantangan, jadi mereka ingin mencoba semua
opsi dan memastikan metode yang digunakan adalah yang sebaik mungkin. Dan hasilnya,
mereka mungkin akan sering bertanya dan skeptis terhadap ide orang lain. Kamu
tidak seperti pertanyaan seperti mereka, jadi Anda mungkin mengalami masalah
mengenai pendekatan mereka yang menantang
Selain itu, mereka juga memprioritaskan Hasil, jadi sering kali sangat langsung dan
mudah. Ketika mereka fokus pada garis bawah, mereka mungkin mengabaikan
perasaan orang lain. Anda mungkin mengalami masalah mengenai apa yang Anda lihat sebagai
dorongan berlebihan untuk hasil.
Akhirnya, mereka yang memiliki style DC juga memprioritaskan Akurasi. Karena mereka mau
mengontrol kualitas pekerjaan mereka, mereka lebih memilih untuk bekerja secara mandiri, dan mereka
mungkin fokus pada pemisahan emosi dari fakta. Karena Anda juga ingin merawatnya
Standar tinggi, Anda mungkin bisa berhubungan dengan tujuan mereka, pendekatan analitis";
        $explanation->save();

        $explanation = new Explanation();
        $explanation->dominan = 'D';
        $explanation->tujuan = 'Hasil bottom-line, kemenangan';
        $explanation->menilai_orang_dari = 'Kemampuan untuk mencapai hasil';
        $explanation->mempengaruhi_orang_dari = 'Ketegasan, desakan, persaingan';
        $explanation->sering = 'Kebutuhan untuk menang, menghasilkan situasi menang / kalah';
        $explanation->dibawah_tekanan = 'Menjadi tidak sabar dan menuntut';
        $explanation->ketakutan = 'Dimanfaatkan, tampil lemah';
        $explanation->meningkatkan_efektifitas_melalui = 'Sabar, empati';
        $explanation->penjelasan = "Orang dengan gaya D adalah orang berkemauan keras yang memprioritaskan Hasil.
Karena mereka ingin membuat tanda mereka, mereka terus mencari yang baru
tantangan dan peluang. Anda mungkin menemukan daya saing mereka sulit
berhubungan dengan, tapi mereka secara alami bertekad untuk mendorong untuk sukses.
Selain itu, mereka juga memprioritaskan Aksi, sehingga mereka sering fokus untuk mencapainya
tujuan dengan cepat dan tegas Karena mereka cenderung sangat cepat, mereka menyukainya
ketika orang memotong untuk mengejar. Karena Anda juga suka bergerak cepat, Anda
Mungkin ada sedikit masalah yang berkaitan dengan gaya berani mereka.
Selanjutnya, mereka yang memiliki gaya D juga memprioritaskan Challenge. Karena mereka
ingin mengendalikan hasil, mereka sering mempertanyakan dan mandiri. Karena Anda lebih memilih untuk menumbuhkan hubungan persahabatan dengan orang lain, Anda
mungkin mengalami masalah berkaitan dengan pendekatan mereka yang terkadang menantang.";
        $explanation->save();

        $explanation = new Explanation();
        $explanation->dominan = 'Di';
        $explanation->tujuan = 'Tindakan cepat, peluang baru';
        $explanation->menilai_orang_dari = 'Keyakinan, pengaruh';
        $explanation->mempengaruhi_orang_dari = 'Pesona, aksi berani';
        $explanation->sering = 'Ketidaksabaran, egotisme, manipulasi';
        $explanation->dibawah_tekanan = 'Menjadi agresif, mengalahkan orang lain';
        $explanation->ketakutan = 'Kehilangan kekuatan';
        $explanation->meningkatkan_efektifitas_melalui = 'Kesabaran, kerendahan hati, pertimbangan gagasan orang lain';
        $explanation->penjelasan = "Orang-orang dengan gaya Di Memprioritaskan Aksi, dan mereka mungkin menemukan sebagai
petualang dan berani Karena mereka tumbuh bosan dengan mudah, individu-individu ini
sering mencari tugas unik dan posisi kepemimpinan. Karena kamu juga
Ingin mempertahankan kecepatan tinggi, Anda mungkin bisa berhubungan dengan energi tinggi mereka
pendekatan untuk bekerja
Selain itu, mereka juga memprioritaskan Hasil, jadi mereka sering bekerja untuk menyelesaikannya
tujuan cepat Sementara mereka kompetitif, mereka juga bisa memanfaatkan pesona
membujuk orang lain untuk membantu mereka sukses. Anda mungkin berpikir mereka terlalu fokus
pada hasil.
Akhirnya, mereka yang memiliki gaya Di juga memprioritaskan Antusiasme, jadi mereka mungkin datang
di sebagai menarik dan menyenangkan karena energi tinggi mereka. Mereka mungkin menggunakan
kegembiraan mereka untuk menginspirasi orang lain dan menciptakan lingkungan yang semarak. Karena
Anda juga cenderung bersikap positif dan ekspresif, Anda mungkin menghargai mereka
pendekatan dinamis";
        $explanation->save();

        $explanation = new Explanation();
        $explanation->dominan = 'iD';
        $explanation->tujuan = 'Terobosan yang mengasyikkan';
        $explanation->menilai_orang_dari = 'Kemampuan berpikir kreatif, kharisma';
        $explanation->mempengaruhi_orang_dari = 'Keberanian, semangat';
        $explanation->sering = 'Impulsif, blak-blakan';
        $explanation->dibawah_tekanan = 'Menjadi impulsif, melampiaskan pada orang lain';
        $explanation->ketakutan = 'Lingkungan tetap, kehilangan persetujuan atau perhatian';
        $explanation->meningkatkan_efektifitas_melalui = 'Berfokus pada detail, kesabaran, mendengarkan orang lain';
        $explanation->penjelasan = 'Orang-orang dengan gaya iD memprioritaskan Action, jadi mereka cenderung fokus
bergerak menuju tujuan mereka dengan cepat. Mereka suka mempertahankan kecepatan, dan
mereka mungkin merasa nyaman membuat keputusan dengan cepat. Karena Anda berbagi
Kecepatan aktif mereka, Anda bisa bergabung dengan mereka dalam menciptakan momentum.
Selain itu, mereka juga memprioritaskan Antusiasme, dan mereka mungkin menemukan sebagai
Orang berenergi tinggi yang suka mengendarai mobil lain di sekitar tujuan bersama. Paling
Mungkin, mereka mempertahankan sikap optimis dan membawa optimisme yang tulus kepada mereka
kerja. Anda juga cenderung mengekspresikan diri dan tetap bersikap positif, jadi mungkin juga Anda
menghargai kecenderungan mereka untuk membuat orang senang dengan gagasan.
Selanjutnya, mereka yang memiliki gaya iD juga memprioritaskan Hasil, jadi mereka mungkin datang
sebagai ambisius dan berorientasi pada tujuan. Kemungkinan besar, mereka menikmati leveraging
hubungan untuk mencapai prestasi baru. Bagi Anda, mungkin terlihat seperti itu
Pencarian untuk hasil melihat faktor penting lainnya.';
        $explanation->save();

        $explanation = new Explanation();
        $explanation->dominan = 'i';
        $explanation->tujuan = 'Popularitas, persetujuan, kegembiraan';
        $explanation->menilai_orang_dari = 'Keterbukaan, ketrampilan sosial, antusiasme';
        $explanation->mempengaruhi_orang_dari = 'Pesona, optimisme, energi';
        $explanation->sering = 'Optimisme, pujian';
        $explanation->dibawah_tekanan = 'Menjadi tidak terorganisir, terlalu ekspresif';
        $explanation->ketakutan = 'Penolakan, tidak terdengar';
        $explanation->meningkatkan_efektifitas_melalui = 'Menjadi lebih objektif, mengikuti tugas';
        $explanation->penjelasan = "Orang dengan gaya i menempatkan prioritas tinggi pada antusiasme dan cenderung mempertahankan
sebuah sikap optimis. Mereka senang dengan kemungkinan baru, dan mungkin juga begitu
sangat ekspresif saat mengkomunikasikan ide mereka. Anda mungkin menghargai
kehangatan dan optimisme mereka, tapi Anda mungkin mengalami kesulitan mencocokkan mereka
energik dan semangat tinggi.
Selain itu, mereka memprioritaskan Aksi, sehingga mereka sering fokus membuat cepat
maju menuju solusi menarik. Karena mereka cenderung mondar-mandir, mereka
mungkin akan bersemangat untuk pergi tanpa menghabiskan banyak waktu untuk mempertimbangkan
konsekuensi. Karena Anda cenderung cepat-cepat pergi, Anda mungkin menghargai mereka
pendekatan spontan
Selanjutnya, mereka dengan gaya i juga nilai Kolaborasi. Mereka biasanya menikmati
bertemu orang baru, dan mereka mungkin memiliki bakat untuk melibatkan semua orang
dan membangun semangat tim. Sementara Anda berbagi minat mereka pada kerja tim, Anda sebenarnya
mungkin tidak senyaman mereka memimpin dalam pengaturan kelompok.";
        $explanation->save();

        $explanation = new Explanation();
        $explanation->dominan = 'iS';
        $explanation->tujuan = 'Pertemanan';
        $explanation->menilai_orang_dari = 'Kemampuan untuk melihat baik pada orang lain, kehangatan';
        $explanation->mempengaruhi_orang_dari = 'Kemampuan untuk menyetujui, empati';
        $explanation->sering = 'Kesabaran dengan orang lain, pendekatan tidak langsung';
        $explanation->dibawah_tekanan = 'Mengambil kritik secara pribadi, menghindari konflik';
        $explanation->ketakutan = 'Menekan orang lain, tidak disukai';
        $explanation->meningkatkan_efektifitas_melalui = 'Mengakui kekurangan orang lain, menghadapi masalah';
        $explanation->penjelasan = "Orang-orang dengan gaya iS memprioritaskan Kolaborasi, jadi mereka senang bekerja sama dengan mereka
yang lain sebanyak mungkin. Karena mereka ingin semua orang merasa disertakan,
Mereka cenderung menghabiskan waktu dan tenaga untuk melibatkan orang. Sejak kamu berbagi
Keinginan mereka untuk bekerja dengan orang lain, Anda mungkin sama bersemangatnya seperti mereka
tugas ke dalam proyek kelompok.
Selain itu, mereka juga memprioritaskan Antusiasme, dan kemungkinan besar akan membawa a
sikap positif terhadap pekerjaan dan hubungan mereka. Mereka ringan hati dan
mendorong, dan mereka sering suka menyebarkan semangat optimis mereka kepada orang lain.
Karena Anda berbagi pandangan positif mereka, mungkin Anda merasa mudah untuk berhubungan
pendekatan bahagia-go-lucky mereka.
Selanjutnya, mereka yang memiliki gaya iS juga menghargai Support, jadi cenderung
Orang yang fleksibel menginginkan yang terbaik untuk grup. Saat orang lain berjuang,
mereka cenderung menunjukkan kepedulian dan menawarkan dukungan yang tidak kritis. Karena Anda berbagi
Keinginan untuk membantu orang lain, Anda mungkin bisa berhubungan dengan pasien mereka, menerima
pendekatan.";
        $explanation->save();

        $explanation = new Explanation();
        $explanation->dominan = 'Si';
        $explanation->tujuan = 'Penerimaan, hubungan dekat';
        $explanation->menilai_orang_dari = 'Reseptivitas terhadap orang lain, mudah didekati';
        $explanation->mempengaruhi_orang_dari = 'Menunjukkan empati, sabar';
        $explanation->sering = 'Kebaikan, koneksi pribadi';
        $explanation->dibawah_tekanan = 'Menghindari konflik, mencoba membuat semua orang bahagia';
        $explanation->ketakutan = 'Dipaksa menekan orang lain, menghadapi agresi';
        $explanation->meningkatkan_efektifitas_melalui = 'Mengatakan "tidak" jika perlu, menangani masalah';
        $explanation->penjelasan = "Orang-orang dengan gaya Si memprioritaskan Kolaborasi, dan mereka suka melibatkan
orang lain dalam mengambil keputusan. Kemungkinan besar, mereka mencoba membangun semangat tim dan ada
kurang peduli dengan prestasi individu. Karena Anda berbagi mereka
Kecenderungan untuk bekerja sama, Anda mungkin menghargai keinginan mereka
kesatuan tim
Selain itu, mereka juga memprioritaskan Support, sehingga cenderung cenderung tinggi
pentingnya kebutuhan orang lain. Karena mereka memiliki akomodatif
Mereka sering bersedia menyisihkan pendapat dan kebutuhan mereka sendiri untuk membantu
lainnya Karena Anda mungkin memiliki ketertarikan pada perasaan orang, Anda mungkin melakukannya
merasa mudah untuk berhubungan dengan kecenderungan mereka untuk mencari orang lain.
Selanjutnya, mereka yang memiliki gaya Si juga menghargai Antusiasme, dan biasanya
tampil sebagai ceria. Mereka cenderung melihat hal positif dalam kebanyakan situasi, dan
mereka mendorong gagasan orang lain. Kemungkinan besar, Anda bisa berhubungan dengan baik
pendekatan mereka yang optimis.";
        $explanation->save();

        $explanation = new Explanation();
        $explanation->dominan = 'S';
        $explanation->tujuan = 'Harmoni, stabilitas';
        $explanation->menilai_orang_dari = 'Ketergantungan, ketulusan';
        $explanation->mempengaruhi_orang_dari = 'Mengakomodasi orang lain, konsisten kinerjanya';
        $explanation->sering = 'Kesederhanaan, perlawanan pasif, kompromi';
        $explanation->dibawah_tekanan = 'Memberikan, menghindari mengungkapkan pendapat benar';
        $explanation->ketakutan = 'Membiarkan orang turun, perubahannya cepat';
        $explanation->meningkatkan_efektifitas_melalui = 'Menampilkan kepercayaan diri, mengungkapkan perasaan sejati';
        $explanation->penjelasan = "Orang dengan gaya S memberi nilai tinggi dalam memberikan Dukungan. Mereka cenderung
Jadilah pendengar yang baik, dan akibatnya mereka sering terlihat sabar dan
akomodatif. Anda mungkin merasa mudah untuk berhubungan dengan kemalasan mereka, membantu
pendekatan, dan Anda cenderung untuk bergabung dengan mereka dalam menjaga yang ramah, terbuka
lingkungan Hidup.
Selain itu, mereka juga memprioritaskan Stabilitas, sehingga mereka sering fokus pada perawatan a
lingkungan yang tertata rapi. Karena mereka cenderung berhati-hati, mereka mungkin melakukannya
gunakan kecepatan metodis dan hindari perubahan yang cepat bila memungkinkan. Sementara kamu
mungkin mengakui pentingnya menilai risiko, Anda mungkin sedikit
lebih bersedia daripada mencoba pendekatan baru.
Selanjutnya, orang dengan gaya S juga memprioritaskan Kolaborasi. Karena
Mereka menghargai lingkungan yang penuh rasa percaya dan hangat, mereka mungkin akan menghindarinya
Pastikan orang merasa disertakan dan diterima. Karena Anda berbagi fokus ini
pada kerja sama tim yang ramah, kalian berdua bisa bekerja sama untuk mempertahankan keterbukaan,
atmosfer reseptif";
        $explanation->save();

        $explanation = new Explanation();
        $explanation->dominan = 'SC';
        $explanation->tujuan = 'Lingkungan yang tenang, tujuan tetap, kemajuan yang mantap';
        $explanation->menilai_orang_dari = 'Keandalan, pandangan realistis, bahkan temperamen';
        $explanation->mempengaruhi_orang_dari = 'Diplomasi, kontrol diri, konsistensi';
        $explanation->sering = 'Kesediaan untuk membiarkan orang lain memimpin, kerendahan hati';
        $explanation->dibawah_tekanan = 'Menjadi tidak fleksibel, menghalangi spontanitas, sesuai';
        $explanation->ketakutan = 'Tekanan waktu, ketidakpastian, kekacauan';
        $explanation->meningkatkan_efektifitas_melalui = 'Memulai perubahan, berbicara';
        $explanation->penjelasan = "Orang-orang dengan gaya SC memberi prioritas tinggi pada Stabilitas dan pencapaiannya
hasil yang konsisten Karena mereka cenderung berhati-hati, mereka mungkin lebih suka
Bekerja di lingkungan yang bisa diprediksi yang tidak akan membawa banyak kejutan. Sejak
Anda mungkin bersedia mengambil risiko, Anda mungkin merasa sulit untuk berhubungan dengan mereka
fokus pada hasil yang aman dan dapat diandalkan.
Selain itu, mereka juga memprioritaskan Dukungan, sehingga cenderung akomodatif
dan bersedia mengorbankan kebutuhan dan preferensi mereka sendiri bila diperlukan. Paling
Mungkin, mereka biasanya sabar dan diplomatis, dan mereka tidak mungkin menjadi seperti itu
terlalu emosional saat terdorong. Karena Anda berbagi kesediaan untuk membantu
Yang lain, Anda mungkin merasa mudah berhubungan dengan pasien mereka, dengan pendekatan yang sesuai.
Selanjutnya, mereka yang memiliki gaya SC juga menghargai Accuracy. Mereka cenderung bekerja
secara sistematis untuk menghasilkan kualitas kerja dan solusi yang efektif, dan mungkin juga
cukup analitis di kali. Anda mungkin berhubungan baik dengan minat mereka
menghasilkan pekerjaan yang solid dan bebas dari kesalahan.";
        $explanation->save();

        $explanation = new Explanation();
        $explanation->dominan = 'CS';
        $explanation->tujuan = 'Stabilitas, hasil yang andal';
        $explanation->menilai_orang_dari = 'Standar yang tepat, metode tertib';
        $explanation->mempengaruhi_orang_dari = 'Kepraktisan, perhatian terhadap detail';
        $explanation->sering = 'Metode tradisional, sense of caution';
        $explanation->dibawah_tekanan = 'Mundur, menjadi ragu';
        $explanation->ketakutan = 'Situasi emosional, ambiguitas';
        $explanation->meningkatkan_efektifitas_melalui = 'Menunjukkan fleksibilitas, menentukan, menunjukkan urgensi';
        $explanation->penjelasan = 'Orang-orang dengan gaya CS memprioritaskan Stabilitas, jadi mungkin mereka datang
secara tertib dan tepat. Karena mereka lebih suka dipersiapkan dengan baik, mereka cenderung
untuk menghindari mengambil risiko atau membuat perubahan yang cepat. Karena Anda mungkin lebih
Petualang dari mereka, Anda mungkin merasa sulit untuk berhubungan dengan hati-hati mereka
pendekatan.
Selain itu, mereka juga menempatkan prioritas tinggi pada Accuracy, sehingga mereka cenderung membelanjakannya
waktu menyempurnakan ide mereka sebelum bergerak maju. Kemungkinan besar, mereka mengandalkan data
sebelum membuat keputusan dan cenderung mengambil pendekatan objektif. Karena
Anda berbagi kecenderungan mereka untuk menghargai hasil yang akurat, Anda mungkin menghargai
pendekatan metodologis mereka yang hati-hati.
Selanjutnya, mereka yang memiliki gaya CS juga menghargai Support, dan biasanya mereka
bersedia membantu bila keahlian mereka dibutuhkan. Mereka juga cenderung mengalami kejadian dan sabar dengan kedua orang dan situasi sulit. Karena Anda
berbagi pendekatan yang mewajibkan mereka, Anda berdua mungkin gagal untuk menegaskan kebutuhan Anda sendiri
untuk menghindari goyang perahu.';
        $explanation->save();

        $explanation = new Explanation();
        $explanation->dominan = 'C';
        $explanation->tujuan = 'Akurasi, proses objektif';
        $explanation->menilai_orang_dari = 'Keahlian, proses yang sistematis';
        $explanation->mempengaruhi_orang_dari = 'Logika, standar yang ketat';
        $explanation->sering = 'Analisis, pengekangan';
        $explanation->dibawah_tekanan = 'Mengabaikan orang lain dengan logika, menjadi kaku';
        $explanation->ketakutan = 'Menjadi salah, menampilkan emosi dengan kuat';
        $explanation->meningkatkan_efektifitas_melalui = 'Mengakui perasaan orang lain, melihat melampaui data';
        $explanation->penjelasan = "Orang dengan gaya C menempatkan prioritas tinggi pada Akurasi. Karena mereka mau
Untuk memastikan hasil yang superior, mereka cenderung menganalisa pilihan secara rasional dan terpisah
emosi dari fakta Meskipun Anda berbagi penekanan pada pembuatan suara
Solusi, Anda mungkin merasa sulit untuk berhubungan dengan pendekatan mereka yang terpisah.
Selain itu, mereka juga memprioritaskan Stabilitas. Karena mereka cenderung menghargai tindak lanjut
dan menahan diri, mereka merasa tidak nyaman dengan keputusan cepat atau berisiko dan lebih memilih
luangkan waktu untuk membuat pilihan yang tepat. Karena Anda cenderung menyeimbangkan
antara kecepatan dan kehati-hatian, Anda mungkin mengerti keinginan mereka untuk menghindari
bergegas ke hal-hal.
Selanjutnya, orang dengan gaya C juga memprioritaskan Challenge. Dalam pencarian mereka untuk
temukan metode yang paling efisien atau produktif untuk menyelesaikan tugas mereka, mereka
mungkin secara terbuka mempertanyakan gagasan dan menunjukkan kekurangan yang mungkin dilewatkan orang lain.
Karena Anda cenderung mengambil pendekatan yang lebih menerima, Anda mungkin akan sulit melakukannya
berhubungan dengan skeptisisme mereka, yang nampaknya akan membahayakan persatuan tim.";
        $explanation->save();

        $explanation = new Explanation();
        $explanation->dominan = 'CD';
        $explanation->tujuan = 'Hasil yang efisien, keputusan rasional';
        $explanation->menilai_orang_dari = 'Kompetensi, penggunaan logika';
        $explanation->mempengaruhi_orang_dari = 'Standar yang ketat, pendekatan tegas';
        $explanation->sering = 'Terang-terangan, sikap kritis';
        $explanation->dibawah_tekanan = 'Mengabaikan perasaan orang, bergerak maju';
        $explanation->ketakutan = 'Kegagalan, kurang kontrol';
        $explanation->meningkatkan_efektifitas_melalui = 'Kerja sama, memperhatikan kebutuhan orang lain';
        $explanation->penjelasan = "Orang dengan gaya CD memprioritaskan Challenge dan mungkin tampil sebagai
skeptis dan ditentukan. Kemungkinan besar, mereka tidak akan menerima ide tanpa bertanya
banyak pertanyaan, dan mereka suka mengungkap masalah yang bisa mempengaruhi hasil.
Anda cenderung lebih menerima, jadi Anda mungkin merasa sulit untuk berhubungan dengan mereka
kritis, pendekatan tanya jawab.
Selain itu, mereka juga memprioritaskan Akurasi, dan mereka fokus pada pemikiran logis
ciptakan solusi terbaik Mereka cenderung menghindari membiarkan emosi mereka masuk
cara membuat keputusan rasional. Karena Anda berbagi pendekatan analitis mereka,
Anda mungkin merasa mudah untuk berhubungan dengan penekanan pada objektivitas dan logika.
Selanjutnya, mereka yang memiliki gaya CD juga menghargai Hasil dan cenderung
bertekad untuk memberikan hasil yang berkualitas secara efisien. Kemungkinan besar, mereka juga
bersedia untuk mengambil alih proyek bila diperlukan, dan mereka biasanya dapat
dihitung untuk menjaga hal-hal di jalur. Tekad mereka untuk mendapatkan hasil mungkin
tampak keras kepala atau tidak sabar untuk Anda di kali.";
        $explanation->save();
    }
}
