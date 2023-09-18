<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Navigation Menu</title>
  <link rel="icon" type="image/x-icon" href="gsk_logo-removebg.ico">
  <!-- <link data-optimized="2" rel="stylesheet" href="https://www.marifa.id/wp-content/litespeed/css/aaa2a8fed9b9500c578296f9ee746ad4.css?ver=6f193"> -->
  <link href="./pages/min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.15/dist/tailwind.min.css" rel="stylesheet">
  <link rel="stylesheet" href="./pages/fonts/css/all.css">
  <link href="https://fonts.cdnfonts.com/css/trajan-pro" rel="stylesheet">

  <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>

  <style>
    .bg-cc1 {
      background: #000800!important
    }
  </style>

</head>

<body class="font-sans bg-gray-300">

  <!-- Navigation Bar -->
  <nav class="p-4 fixed top-0 left-0 bg-transparent w-full text-white" style="z-index:9999;">
    <div class="container mx-auto flex justify-between items-center px-16">
      <a href="#" class="text-xl font-bold text-white"><img src="./pages/gsk_logo.png" style="max-width: 75px;height: auto;border:none;" /></a>
      <ul class="flex space-x-4">
        <li><a href="#jumbotron" class="hover:text-blue-500 transition">Home</a></li>
        <li><a href="#about" class="hover:text-blue-500 transition">Tentang Kami</a></li>
        <li><a href="#tiperumah" class="hover:text-blue-500 transition">Tipe Rumah</a></li>
        <!-- <li><a href="#" class="hover:text-blue-500 transition">Clients</a></li> -->
        <!-- <li><a href="#" class="hover:text-blue-500 transition">Testimonies</a></li> -->
        <li><a href="#contact" class="hover:text-blue-500 transition">Hubungi Kami</a></li>
      </ul>
    </div>
  </nav>

  <!-- Rest of your content goes here -->
  <!-- Jumbotron Section -->
  <section class="bg-cover bg-center text-white flex justify-center items-center"
  id="jumbotron"
    style="background-image: url('./pages/GSK_RENDER_MASJID.jpg');height: 100vh;">
    <div class="container mx-auto text-center w-3/4">
      <h1 class="font-bold mb-4 text-white" style="font-size: 55px;font-family: 'Trajan Pro', sans-serif;line-height: auto;">Grand shafA</h1>
      <p class="mb-8 my-2 pb-6" style="font-size: 34px;font-family: 'Trajan Pro', sans-serif;line-height: auto;">Membersamai dalam meraih keberkahan.</p>
      <a href="#next" class="bg-blue-500 text-white px-6 py-3 rounded-full hover:bg-blue-600 transition text-xl" style="font-family: 'Trajan Pro';">Lihat</a>
    </div>
  </section>

  <div style="background: black;" id="next">
    <!-- Persuasion Section -->
    <section class="container mx-auto py-16 w-3/4">
      <div class="flex flex-col md:flex-row items-center justify-center space-y-8 md:space-y-0 md:space-x-16">
        <!-- Left Column -->
        <div class="text-center md:text-left">
          <div class="text-white" style="font-size: 56px;font-family: 'Times New Roman'">ANDA INGIN</div>
          <h2 class="text-yellow-200" style="font-size: 40px;font-family: 'Times New Roman'">Hunian Mewah Syariah & Peluang Investasi</h2>
          <p class="text-white" style="font-size: 27px;font-family: 'calibri'">Anda tengah mencari hunian yang ideal dan peluang investasi menarik di Kota Ponorogo?</p>
          <p class="text-white" style="font-size: 27px;font-family: 'calibri'">Perkembangan properti yang selalu menarik perhatian bagi Anda yang mencari tempat tinggal nyaman atau peluang investasi yang menjanjikan. Jika Anda merasa bingung atau memiliki pertanyaan seputar kepemilikan properti yang nyaman dan berpotensi tinggi, maka Anda berada di tempat yang tepat. Salah satu pilihan menarik yang patut dipertimbangkan adalah perumahan Grand Shafa Kertosari.</p>
          <ul class="mb-6">
            <li class="flex items-center text-green-500 font-size: 27px;">
              <span class="text-lg mr-2">&#10004;</span>
              <span>Bebas denda</span>
            </li>
            <li class="flex items-center text-green-500">
              <span class="text-lg mr-2">&#10004;</span>
              <span>Proses pembangunan & pengurusan tidak ribet</span>
            </li>
            <li class="flex items-center text-green-500">
              <span class="text-lg mr-2">&#10004;</span>
              <span>lokasi sangat strategis yang bebas banjir di Kota Ponorogo</span>
            </li>
            <!-- Add more questions here -->
          </ul>
          <!-- <a href="#" class="bg-blue-500 text-white px-6 py-3 rounded-full hover:bg-blue-600 transition">Get Started</a> -->
        </div>
        <!-- Right Column -->
        <div class="grid grid-cols-1 gap-4">
          <img src="./pages/tipe103.jpg" style="width: 850px;height: auto;"
            alt="Image 1" class="rounded-lg">
        </div>
      </div>
    </section>
  </div>

  <!-- Main Content Section -->
  <div class="bg-gray-200" id="services">
    <section class="container mx-auto py-16 w-3/4">
      <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
        <!-- Grid Item 1 -->
        <div class="flex items-center">
          <img src="./pages/103.png"
            alt="Image 1" class="w-full rounded-lg">
        </div>
        <div class="flex flex-col items-center justify-center">
          <h3 class="text-black" style="font-size: 56px;font-family: 'Times New Roman'">Konsep</h3>
          <p class="text-grey" style="font-size: 22px;font-family: 'calibri'">Mengusung konsep ruang terbuka, setiap unit Perumahan Grand Shafa Kertosari memungkinkan untuk Anda memiliki tempat privasi untuk menjemur pakaian, parkir motor, bersantai maupun tempat untuk anak-anak Anda bermain secara bebas tanpa khawatir apapun. Bahkan sirkulasi udara dirumah Anda pun dapat meningkat sehingga rumah Anda tidak terasa pengap dan mendapat cahaya yang alami. Sangat menguntungkan bukan? Terutama untuk Anda yang menyukai tanaman, dengan adanya ruang terbuka Anda bisa menghias ruang tersebut sesuai keinginan dan kreatifitas Anda. </p>
        </div>
        <!-- Grid Item 2 -->
        <div class="flex flex-col items-center justify-center">
          <h3 class="text-black" style="font-size: 56px;font-family: 'Times New Roman'">Icon</h3>
          <p class="text-grey" style="font-size: 22px;font-family: 'calibri'">Masjid seringkali disebut masyarakat sebagai rumah Allah SWT. Beberapa ayat dalam Al-Qur'an yang menyebutkan bahwa fungsi masjid adalah sebagai tempat yang didalamnya banyak menyebut nama Allah (tempat berdzikir), tempat beri'tikaf, tempat beribadah (shalat), pusat pertemuan islam untuk membicarakan urusan hidup dan perjuangan. masjid juga berfungsi untuk mewujudkan kesejahteraan dan ketertiban sosial melalui kajian-kajian keagamaan. Di dalam masyarakat yang majemuk, seperti Indonesia, maka masjid dapat difungsikan untuk memberikan dakwah yang bersifat menyejukkan dalam praktik kehidupan sehari-hari.</p>
        </div>
        <div class="flex items-center">
          <img src="./pages/74.png"
            alt="Image 2" class="w-full rounded-lg">
        </div>
        <div class="flex items-center">
          <img src="./pages/46.png"
            alt="Image 2" class="w-full rounded-lg">
        </div>
        <div class="flex flex-col items-center justify-center">
          <h3 class="text-black" style="font-size: 56px;font-family: 'Times New Roman'">Fasilitas</h3>
          <p class="text-grey" style="font-size: 22px;font-family: 'calibri'">Grand Shafa Kertosari tak hanya menghadirkan sekadar fasilitas, melainkan juga menyajikan gaya hidup modern yang nyaman untuk para penghuninya. Di sini, kenyamanan menjadi keistimewaan eksklusif yang tak ternilai. Setiap detail dirancang dengan penuh perhatian, memenuhi berbagai kebutuhan dan harapan dengan sentuhan keanggunan.
          </p>
          <div x-data="{ openPanels: [] }" class="flex flex-col items-stretch w-full mt-4 space-y-0">
              <div class="border rounded-t w-full">
                  <button @click="openPanels.includes(1) ? openPanels = openPanels.filter(item => item !== 1) : openPanels.push(1)"
                      class="flex justify-between items-center w-full bg-black text-white px-4 py-2 rounded-md focus:outline-none">
                      <span>Lingkungan yang Terjaga: Pagar Tembok Keliling</span>
                      <span x-text="openPanels.includes(1) ? '-' : '+'"></span>
                  </button>
                  <div x-show="openPanels.includes(1)" class="p-4 bg-gray-100">
                      <!-- Content for Panel 1 goes here -->
                      Grand Shafa Kertosari menampilkan lingkungan yang terkendali dan teratur dengan pagar tembok keliling. Berfungsi tak hanya untuk menjaga keamanan dan memberi privasi, tetapi juga sebagai ciri visual khas. Dalam keseluruhan, pagar tembok keliling memiliki peran penting dalam membentuk karakter dan kualitas lingkungan hunian yang kami tawarkan.
                  </div>
              </div>

              <div class="border rounded-none">
                  <button @click="openPanels.includes(2) ? openPanels = openPanels.filter(item => item !== 2) : openPanels.push(2)"
                      class="flex justify-between items-center w-full bg-black text-white px-4 py-2 rounded-md focus:outline-none">
                      <span>Keamanan Tanpa Henti: CCTV dan Satpam 24 Jam</span>
                      <span x-text="openPanels.includes(2) ? '-' : '+'"></span>
                  </button>
                  <div x-show="openPanels.includes(2)" class="p-4 bg-gray-100">
                      <!-- Content for Panel 2 goes here -->
                      Kami tidak pernah berhenti menjaga keamanan. Dengan teknologi modern, sistem CCTV menggabungkan peran satpam yang berjaga selama 24 jam. Pengawasan konstan meminimalisir risiko tindakan kriminal dan memberi rasa aman yang tak tergantikan kepada setiap penghuni.membantu mencegah tindakan kriminal, dan memberikan rasa aman kepada penghuni
                  </div>
              </div>

              <div class="border rounded-none">
                  <button @click="openPanels.includes(3) ? openPanels = openPanels.filter(item => item !== 2) : openPanels.push(3)"
                      class="flex justify-between items-center w-full bg-black text-white px-4 py-2 rounded-md focus:outline-none">
                      <span>Pintu Satu Akses: One Gate System</span>
                      <span x-text="openPanels.includes(3) ? '-' : '+'"></span>
                  </button>
                  <div x-show="openPanels.includes(3)" class="p-4 bg-gray-100">
                      <!-- Content for Panel 3 goes here -->
                      Kami memahami bahwa keamanan adalah kunci. Oleh karena itu, Grand Shafa Kertosari menerapkan sistem akses tunggal yang mengatur masuk dan keluar. Tidak hanya mengawasi lalu lintas kendaraan dan penghuni, tetapi juga memberi tingkat keamanan yang lebih tinggi
                  </div>
              </div>

              <div class="border rounded-none">
                  <button @click="openPanels.includes(4) ? openPanels = openPanels.filter(item => item !== 2) : openPanels.push(4)"
                      class="flex justify-between items-center w-full bg-black text-white px-4 py-2 rounded-md focus:outline-none">
                      <span>Masjid Perumahan</span>
                      <span x-text="openPanels.includes(4) ? '-' : '+'"></span>
                  </button>
                  <div x-show="openPanels.includes(4)" class="p-4 bg-gray-100">
                      <!-- Content for Panel 4 goes here -->
                      Fasilitas umum masjid adalah ruang ibadah bagi penghuni yang memadukan kebutuhan spiritual dengan kenyamanan lingkungan hunian. Dengan adanya masjid di dalam perumahan, penghuni dapat beribadah lebih mudah dan mengembangkan rasa kebersamaan. Grand Shafa Kertosari menghadirkan Masjid As- Shafa sebagai masjid perumahan yang dapat digunakan para warga perumahan Grand Shafa Kertosari dalam kegiatan keagamaan dan akan menjadi tempat lahirnya generasi - generasi penerus yang menegakkan agama islam 
                  </div>
              </div>

              <div class="border rounded-none">
                  <button @click="openPanels.includes(5) ? openPanels = openPanels.filter(item => item !== 2) : openPanels.push(5)"
                      class="flex justify-between items-center w-full bg-black text-white px-4 py-2 rounded-md focus:outline-none">
                      <span>Playground</span>
                      <span x-text="openPanels.includes(5) ? '-' : '+'"></span>
                  </button>
                  <div x-show="openPanels.includes(5)" class="p-4 bg-gray-100">
                      <!-- Content for Panel 4 goes here -->
                      Playground adalah area bermain anak yang dirancang khusus dengan peralatan yang aman dan sesuai dengan usia anak-anak. Fasilitas ini memberikan ruang bagi anak-anak untuk bermain, belajar sosialisasi, dan berinteraksi dengan sesama penghuni. Playground kami adalah wadah yang aman dan meriah bagi mereka untuk bermain, belajar, dan berinteraksi dengan teman-teman sebaya. Tanpa batasan, anak-anak bisa tumbuh dan berkembang dengan penuh keceriaan 
                  </div>
              </div>

              <div class="border rounded-none">
                  <button @click="openPanels.includes(6) ? openPanels = openPanels.filter(item => item !== 2) : openPanels.push(6)"
                      class="flex justify-between items-center w-full bg-black text-white px-4 py-2 rounded-md focus:outline-none">
                      <span>Lampu penerangan jalan di setiap rumah </span>
                      <span x-text="openPanels.includes(6) ? '-' : '+'"></span>
                  </button>
                  <div x-show="openPanels.includes(6)" class="p-4 bg-gray-100">
                      <!-- Content for Panel 4 goes here -->
                      Fasilitas ini mencakup pemasangan lampu penerangan jalan di depan setiap rumah. Hal ini membantu menciptakan lingkungan yang terang dan aman di malam hari, memberikan penghuni rasa nyaman dan keamanan saat beraktivitas di luar ruangan.
                  </div>
              </div>
              
          </div>
        </div>
        <!-- Add more grid items here -->
      </div>
    </section>
  </div>

  <!-- Main Content Section -->
  <div class="bg-gray-200" id="tiperumah">
    <section class="container mx-auto py-16 w-3/4">
      <h1 class="text-center mb-12 pb-12 w-3/4 mx-auto" style="font-size: 56px;font-family: 'Trajan Pro', sans-serif;border-bottom: 3px solid gray;"><span style="border-bottom:5px solid rgba(255, 247, 0, 0.8,var(--tw-bg-opacity));">Tipe Rumah</span></h1>
      <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
        <!-- Grid Item 1 -->
        <div class="flex items-center">
          <img src="./pages/103.png"
            alt="Image 1" class="w-full rounded-lg">
        </div>
        <div class="flex flex-col items-start justify-center text-left">
          <h3 class="text-4xl font-semibold mb-2 text-gray-700 text-left">Unit Rumah Tipe 103</h3>
          <h3 class="text-3xl text-gray-500">Fasilitas</h3>
          <ul class="list-disc text-xl list-inside space-y-2 mt-2">
            <li>2 Ruang Keluarga</li>
            <li>2 Kamar Mandi</li>
            <li>3 Kamar Tidur</li>
            <li>Ruang Daour</li>
            <li>Car Port</li>
            <li>Kanopi</li>
          </ul>
        </div>
        <!-- Grid Item 2 -->
        <div class="flex flex-col items-start justify-center text-left">
          <h3 class="text-4xl font-semibold mb-2 text-gray-700 text-left">Unit Rumah Tipe 74</h3>
          <h3 class="text-3xl text-gray-500">Fasilitas</h3>
          <ul class="list-disc text-xl list-inside space-y-2 mt-2">
            <li>Ruang Keluarga</li>
            <li>2 Kamar Mandi</li>
            <li>3 kamar Tidur</li>
            <li>Ruang Makan/Dapur</li>
            <li>Car Port</li>
            <li>Kanopi</li>
          </ul>
        </div>
        <div class="flex items-center">
          <img src="./pages/74.png"
            alt="Image 2" class="w-full rounded-lg">
        </div>
        <div class="flex items-center">
          <img src="./pages/46.png"
            alt="Image 2" class="w-full rounded-lg">
        </div>
        <div class="flex flex-col items-center justify-center">
          <div class="flex flex-col items-start justify-center text-left">
            <h3 class="text-4xl font-semibold mb-2 text-gray-700 text-left">Unit Rumah Tipe 50</h3>
            <h3 class="text-3xl text-gray-500">Fasilitas</h3>
            <ul class="list-disc text-xl list-inside space-y-2 mt-2">
              <li>Ruang Keluarga</li>
              <li>Kamar Mandi</li>
              <li>2Kamar Tidur</li>
              <li>Ruang Dapur</li>
              <li>Car Port</li>
            </ul>
          </div>
        </div>
        <!-- Grid Item 2 -->
        <div class="flex flex-col items-start justify-center text-left">
          <h3 class="text-4xl font-semibold mb-2 text-gray-700 text-left">Unit Rumah Tipe 74</h3>
          <h3 class="text-3xl text-gray-500">Fasilitas</h3>
          <ul class="list-disc text-xl list-inside space-y-2 mt-2">
            <li>Ruang Keluarga</li>
            <li>2 Kamar Mandi</li>
            <li>3 kamar Tidur</li>
            <li>Ruang Makan/Dapur</li>
            <li>Car Port</li>
            <li>Kanopi</li>
          </ul>
        </div>
        <div class="flex items-center">
          <img src="./pages/74.png"
            alt="Image 2" class="w-full rounded-lg">
        </div>
      

      </div>
    </section>
  </div>

  <section class="py-16 w-3/4 mx-auto text-center space-y-6">
    <div class="text-sm"></div>
    <div class="text-black" style="font-size: 56px;font-family: 'Times New Roman'">Allah dan rasulnya memerangi perilaku RIBA</div>
    <div class="text-black" style="font-size: 27px;font-family: 'calibri'">“Maka jika kamu tidak mengerjakan (meninggalkan sisa riba), maka ketahuilah, bahwa Allah dan Rasul-Nya akan memerangimu. Dan jika kamu bertaubat (dari pengambilan riba), maka bagimu pokok hartamu; kamu tidak menganiaya dan tidak (pula) dianiaya.” (QS. Al-Baqarah: 279)

Apabila cara memperoleh rumah menggunakan riba, akan sangat merugi karena Allah dan Rasul mengancam akan memerangi. Sehingga meskipun memiliki rumah yang elit tetapi jika diperoleh dengan cara riba tidak akan membuat kehidupan tenang dan berkah.

Apabila Anda ingin memiliki Hunian yang tanpa riba tetapi bisa diangsur dan hidup menjadi tenang dan berkah maka Anda bisa memperolehnya di Grand Shafa. </div>
  </section>

<section class="py-16 w-3/4 mx-auto text-center space-y-2">
    <div class="text-sm"></div>
    <div class="text-black" style="font-size: 56px;font-family: 'Times New Roman'">Baiti Jannati</div>
    <div class="text-black" style="font-size: 27px;font-family: 'calibri'">Para mufassir memaknainya sebagai tempat tinggal, tempat meraih ketenangan dan ketentraman bersama keluarga, tempat istirahat, dan tempat berlindung dari sengatan panas dan dingin</div>
  </section>

  <section class="pb-16 w-3/4 mx-auto text-center space-y-6">
    <div class="text-black" style="font-size: 56px;font-family: 'Times New Roman'">Ancaman dosa RIBA sangat mengerikan dan menakutkan. Bagaimana solusinya ?</div>
    <div class="text-black" style="font-size: 27px;font-family: 'calibri'">Grand Shafa berharga ratusan juta. Bagi sebagian orang mungkin akan merasa tidak mungkin memiliki rumah yang harganya ratusan juta tanpa meminjam ke bank.
Tetapi itu semua bisa dilakukan, yaitu memiliki rumah di Grand Shafa ini tanpa tanpa riba.</div>
  </section>
  <link rel="stylesheet"
    href="https://www.marifa.id/wp-content/themes/blocksy/static/bundle/non-critical-styles.min.css">
  <section
    class="elementor-section elementor-top-section elementor-element elementor-element-1c76ce elementor-section-boxed elementor-section-height-default elementor-section-height-default w-3/4 mx-auto text-center"
    data-id="1c76ce" data-element_type="section"
    data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
    <div class="elementor-container elementor-column-gap-no">
      <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-64627181"
        data-id="64627181" data-element_type="column"
        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
        <div class="elementor-widget-wrap elementor-element-populated">
          <section
            class="elementor-section elementor-inner-section elementor-element elementor-element-76764dfb elementor-section-boxed elementor-section-height-default elementor-section-height-default"
            data-id="76764dfb" data-element_type="section" id="solusi"
            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
            <div class="elementor-container elementor-column-gap-default gap-4">
              <?php foreach([
                [
                  "fas fa-exclamation-triangle",
                  "Bebas Bunga dan Denda",
                  "Perbankan konvensional menerapkan denda atas keterlambatan angsuran. Grand Shafa Kertosari tak akan membuat Anda terbebani dengan denda. Kami mengutamakan kenyamanan Anda. Dan tentu saja, bebas bunga dengan akad syariah"
                ],
                [
                  "fas fa-university",
                  "Bebas Sita",
                  "Dalam hadist dijelaskan bahwa sita menyita merupakan jalan dan alternatif terakhir didasari hal tersebut, jika Anda mengalami kendala dalam pembayaran angsuran, solusi bukan berarti sita rumah. Kami berkomitmen untuk mencari jalan terbaik bagi semua pihak, menjaga kemudahan bagi Anda dan tanpa membebani pengembang."
                ],
                [
                  "far fa-calendar-times",
                  "Legalitas terjamin",
                  "Penipuan oleh pengembang tak berizin bukanlah hal baru. Kami berbeda, Grand Shafa Kertosari adalah bagian dari PT. Darya Hamsa Mulia yang termasuk dalam Mapan Jaya Group, memberikan legalitas kuat atas setiap kavling tanah yang akan kami bangun."
                ],
              ] as $row): ?>
              <div
                class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-165dc9e shadow rounded-lg bg-white"
                data-id="165dc9e" data-element_type="column"
                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="elementor-widget-wrap elementor-element-populated">
                  <div
                    class="elementor-element elementor-element-30500cdd elementor-view-stacked elementor-shape-circle de_scroll_animation_no elementor-widget elementor-widget-icon"
                    data-id="30500cdd" data-element_type="widget" data-widget_type="icon.default">
                    <div class="elementor-widget-container">
                      <div class="elementor-icon-wrapper">
                        <div class="elementor-icon">
                          <i aria-hidden="true" class="<?= $row[0] ?>"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div
                    class="elementor-element elementor-element-277e011d de_scroll_animation_no elementor-widget elementor-widget-heading"
                    data-id="277e011d" data-element_type="widget" data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                      <h2 class="elementor-heading-title elementor-size-default"><?= $row[1] ?></h2>
                    </div>
                  </div>
                  <div
                    class="elementor-element elementor-element-2985b974 de_scroll_animation_no elementor-widget elementor-widget-text-editor"
                    data-id="2985b974" data-element_type="widget" data-widget_type="text-editor.default">
                    <div class="elementor-widget-container">
                      <p><?= $row[2] ?></p>
                    </div>
                  </div>
                </div>
              </div>
              <?php endforeach; ?>
            </div>
          </section>
          <section
            class="elementor-section elementor-inner-section elementor-element elementor-element-403dd554 elementor-section-boxed elementor-section-height-default elementor-section-height-default mt-4"
            data-id="403dd554" data-element_type="section"
            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
            <div class="elementor-container elementor-column-gap-default gap-4">
            <?php foreach([
                [
                  "fas fa-gavel",
                  "Tanpa Pihak Ketiga",
                  "Setiap pembelian unit rumah di Grand Shafa Kertosari dilakukan antara pihak developer dan konsumen tanpa perantara bank atau pihak ketiga. Ini tentang transparansi dan kepercayaan"
                ],
                [
                  "far fa-handshake",
                  "Akad syar'i Jual Beli",
                  "Setiap pembelian dijamin akad syar'i. Dalam Islam, jual beli diizinkan selama tak merugikan dan sesuai aturan yang ada. Di Grand Shafa Kertosari, kami berpegang teguh pada prinsip ini."
                ],
                [
                  "fas fa-book",
                  "Semua Tanah dan Kavling sudah bersertifikat",
                  "Setiap tanah dan kavling di Grand Shafa Kertosari memiliki sertifikat atas nama PT. Darya Hamsa Mulia, bukan perseorangan. Kejelasan ini akan terus terpelihara saat nama properti dialihkan kepada Anda."
                ],
              ] as $row): ?>
              <div
                class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-165dc9e shadow rounded-lg bg-white"
                data-id="165dc9e" data-element_type="column"
                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="elementor-widget-wrap elementor-element-populated">
                  <div
                    class="elementor-element elementor-element-30500cdd elementor-view-stacked elementor-shape-circle de_scroll_animation_no elementor-widget elementor-widget-icon"
                    data-id="30500cdd" data-element_type="widget" data-widget_type="icon.default">
                    <div class="elementor-widget-container">
                      <div class="elementor-icon-wrapper">
                        <div class="elementor-icon">
                          <i aria-hidden="true" class="<?= $row[0] ?>"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div
                    class="elementor-element elementor-element-277e011d de_scroll_animation_no elementor-widget elementor-widget-heading"
                    data-id="277e011d" data-element_type="widget" data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                      <h2 class="elementor-heading-title elementor-size-default"><?= $row[1] ?></h2>
                    </div>
                  </div>
                  <div
                    class="elementor-element elementor-element-2985b974 de_scroll_animation_no elementor-widget elementor-widget-text-editor"
                    data-id="2985b974" data-element_type="widget" data-widget_type="text-editor.default">
                    <div class="elementor-widget-container">
                      <p><?= $row[2] ?></p>
                    </div>
                  </div>
                </div>
              </div>
              <?php endforeach; ?>
            </div>
          </section>
        </div>
      </div>
    </div>
  </section>

  <div style="background: black;" class="text-white mt-16" id="about">
    <section
      class="elementor-section elementor-top-section elementor-element elementor-element-6a01cc30 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default w-3/4 mx-auto py-16"
      data-id="6a01cc30" data-element_type="section"
      data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
      <div class="elementor-container elementor-column-gap-default">
        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-3ffcb3e1"
          data-id="3ffcb3e1" data-element_type="column">
          <div class="elementor-widget-wrap elementor-element-populated">
            <div
              class="elementor-element elementor-element-13b5d01e de_scroll_animation_no elementor-widget elementor-widget-image"
              data-id="13b5d01e" data-element_type="widget" data-widget_type="image.default">
              <div class="elementor-widget-container">
                <img src="./pages/siteplangsk.png" data-placeholder-resp="768x501"
                  
                  decoding="async" width="768" height="501"
                  
                  class="attachment-medium_large size-medium_large wp-image-18 entered litespeed-loaded" alt=""
                  
                  data-sizes="(max-width: 768px) 100vw, 768px" data-ll-status="loaded"
                  sizes="(max-width: 768px) 100vw, 768px"
                  >
              </div>
            </div>
          </div>
        </div>
        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-102661b0"
          data-id="102661b0" data-element_type="column">
          <div class="elementor-widget-wrap elementor-element-populated">
            <div
              class="elementor-element elementor-element-189e571c de_scroll_animation_no elementor-widget elementor-widget-heading"
              data-id="189e571c" data-element_type="widget" data-widget_type="heading.default">
              <div class="elementor-widget-container">
                <h6 class="elementor-heading-title elementor-size-default font-bold text-white">TENTANG</h6>
              </div>
            </div>
            <div
              class="elementor-element elementor-element-1c5dd7d8 de_scroll_animation_no elementor-widget elementor-widget-heading"
              data-id="1c5dd7d8" data-element_type="widget" data-widget_type="heading.default">
              <div class="elementor-widget-container">
                <h3 class="elementor-heading-title elementor-size-default text-5xl font-times new roman mb-4 text-white">Grand Shafa
                  <br>Kertosari Ponorogo
                </h2>
              </div>
            </div>
            <div
              class="elementor-element elementor-element-4301579a de_scroll_animation_no elementor-widget elementor-widget-heading"
              data-id="4301579a" data-element_type="widget" data-widget_type="heading.default">
              <div class="elementor-widget-container">
                <h5 class="text-white" style="font-size: 30px;font-family: 'calibri'">Cocok untuk hunian dan investasi karena harga
                  properti selalu naik</h5>
              </div>
            </div>
            <div
              class="elementor-element elementor-element-4896db8e de_scroll_animation_no elementor-widget elementor-widget-text-editor"
              data-id="4896db8e" data-element_type="widget" data-widget_type="text-editor.default">
              <div class="elementor-widget-container">
                <p>Lokasi strategis di kota Ponorogo, lokasi yang bebas banjir dan kawasan berupa perumahan elit,
                  menjadikan perumahan Grand Shafa menjadi dambaan dan impian kebanyakan orang.</p>
                <p>Proses pembeliannya tidak ribet, Anda akan merasakan ketenangan memiliki rumah di Grand Shafa. Anda
                  bisa mengangsur tanpa riba rumah Anda berkah dan nyaman. Apabila ada kendala dalam angsuran tidak akan
                  didenda maupun dan tidak akan disita.</p>
              </div>
            </div>
            <div
              class="elementor-element elementor-element-582d894 elementor-icon-list--layout-traditional elementor-list-item-link-full_width de_scroll_animation_no elementor-widget elementor-widget-icon-list"
              data-id="582d894" data-element_type="widget" data-widget_type="icon-list.default">
              <div class="elementor-widget-container">
                <ul class="elementor-icon-list-items">
                  <li class="elementor-icon-list-item">
                    <span class="elementor-icon-list-icon">
                      <i aria-hidden="true" class="fas fa-check"></i> </span>
                    <span class="elementor-icon-list-text">Sangat dekat dengan pusat Kota Ponorogo</span>
                  </li>
                  <li class="elementor-icon-list-item">
                    <span class="elementor-icon-list-icon">
                      <i aria-hidden="true" class="fas fa-check"></i> </span>
                    <span class="elementor-icon-list-text">Lokasi Padat Penduduk</span>
                  </li>
                  <li class="elementor-icon-list-item">
                    <span class="elementor-icon-list-icon">
                      <i aria-hidden="true" class="fas fa-check"></i> </span>
                    <span class="elementor-icon-list-text">Kantor Pemerintahan dekat</span>
                  </li>
                  <li class="elementor-icon-list-item">
                    <span class="elementor-icon-list-icon">
                      <i aria-hidden="true" class="fas fa-check"></i> </span>
                    <span class="elementor-icon-list-text">Fasilitas pendidikan juga sangat dekat</span>
                  </li>
                  <li class="elementor-icon-list-item">
                    <span class="elementor-icon-list-icon">
                      <i aria-hidden="true" class="fas fa-check"></i> </span>
                    <span class="elementor-icon-list-text">Fasilitas kesehatan dekat</span>
                  </li>
                </ul>
              </div>
            </div>
            <div
              class="elementor-element elementor-element-190cf1e7 de_scroll_animation_no elementor-widget elementor-widget-spacer"
              data-id="190cf1e7" data-element_type="widget" data-widget_type="spacer.default">
              <div class="elementor-widget-container">
                <div class="elementor-spacer">
                  <div class="elementor-spacer-inner"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section
      class="elementor-section elementor-top-section elementor-element elementor-element-7232aa60 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default w-3/4 mx-auto pb-16"
      data-id="7232aa60" data-element_type="section"
      data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
      <div class="elementor-container elementor-column-gap-default">
        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-1a1a5c14"
          data-id="1a1a5c14" data-element_type="column">
          <div class="elementor-widget-wrap elementor-element-populated">
            <div
              class="elementor-element elementor-element-730056 de_scroll_animation_no elementor-widget elementor-widget-heading"
              data-id="730056" data-element_type="widget" data-widget_type="heading.default">
              <div class="elementor-widget-container">
                <h6 class="elementor-heading-title elementor-size-default font-bold text-white">LOKASI</h6>
              </div>
            </div>
            <div
              class="elementor-element elementor-element-67fd73ed de_scroll_animation_no elementor-widget elementor-widget-heading"
              data-id="67fd73ed" data-element_type="widget" data-widget_type="heading.default">
              <div class="elementor-widget-container">
                <h2 class="elementor-heading-title elementor-size-default text-5xl font-times new romance mb-4 text-white">Berapa Jarak Lokasi Perumahan Dengan Fasilitas
                  umum?</h2>
              </div>
            </div>
            <div
              class="elementor-element elementor-element-3c584bc3 de_scroll_animation_no elementor-widget elementor-widget-text-editor"
              data-id="3c584bc3" data-element_type="widget" data-widget_type="text-editor.default">
              <div class="elementor-widget-container">
                <p>Berikut ini adalah jarak lokasi Grand Shafa terhadap fasilitas umum yang ada.</p>
              </div>
            </div>
            <div
              class="elementor-element elementor-element-6b0d0f1f elementor-icon-list--layout-traditional elementor-list-item-link-full_width de_scroll_animation_no elementor-widget elementor-widget-icon-list"
              data-id="6b0d0f1f" data-element_type="widget" data-widget_type="icon-list.default">
              <div class="elementor-widget-container">
                <ul class="elementor-icon-list-items">
                  <li class="elementor-icon-list-item">
                    <span class="elementor-icon-list-icon">
                      <i aria-hidden="true" class="fas fa-map-marker-alt"></i> </span>
                    <span class="elementor-icon-list-text">2,8 km ke Alun-alun</span>
                  </li>
                  <li class="elementor-icon-list-item">
                    <span class="elementor-icon-list-icon">
                      <i aria-hidden="true" class="fas fa-map-marker-alt"></i> </span>
                    <span class="elementor-icon-list-text">2,8 km ke Mall Keraton Ponorogo </span>
                  </li>
                  <li class="elementor-icon-list-item">
                    <span class="elementor-icon-list-icon">
                      <i aria-hidden="true" class="fas fa-map-marker-alt"></i> </span>
                    <span class="elementor-icon-list-text">2,8 km ke Ponorogo Permai</span>
                  </li>
                  <li class="elementor-icon-list-item">
                    <span class="elementor-icon-list-icon">
                      <i aria-hidden="true" class="fas fa-map-marker-alt"></i> </span>
                    <span class="elementor-icon-list-text">2,7 km ke Kantor Bupati dan Perkantoran Ponorogo</span>
                  </li>
                  <li class="elementor-icon-list-item">
                    <span class="elementor-icon-list-icon">
                      <i aria-hidden="true" class="fas fa-map-marker-alt"></i> </span>
                    <span class="elementor-icon-list-text">2,9 km ke Pasar Terdekat</span>
                  </li>
                  <li class="elementor-icon-list-item">
                    <span class="elementor-icon-list-icon">
                      <i aria-hidden="true" class="fas fa-map-marker-alt"></i> </span>
                    <span class="elementor-icon-list-text">2,1 km ke Rumah Sakit Muhammadiyah</span>
                  </li>
                  <li class="elementor-icon-list-item">
                    <span class="elementor-icon-list-icon">
                      <i aria-hidden="true" class="fas fa-map-marker-alt"></i> </span>
                    <span class="elementor-icon-list-text">1 km ke SPBU</span>
                  </li>
                  <li class="elementor-icon-list-item">
                    <span class="elementor-icon-list-icon">
                      <i aria-hidden="true" class="fas fa-map-marker-alt"></i> </span>
                    <span class="elementor-icon-list-text">70 m saja ke SDN 1 Beduri</span>
                  </li>
                  <li class="elementor-icon-list-item">
                    <span class="elementor-icon-list-icon">
                      <i aria-hidden="true" class="fas fa-map-marker-alt"></i> </span>
                    <span class="elementor-icon-list-text">50m ke Jalan Provinsi</span>
                  </li>
                  <li class="elementor-icon-list-item">
                    <span class="elementor-icon-list-icon">
                      <i aria-hidden="true" class="fas fa-map-marker-alt"></i> </span>
                    <span class="elementor-icon-list-text">50 m ke Jalan Kota/Kabupaten</span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-6d33338f"
          data-id="6d33338f" data-element_type="column">
          <div class="elementor-widget-wrap elementor-element-populated">
            <div
              class="elementor-element elementor-element-70376fb2 de_scroll_animation_no elementor-widget elementor-widget-image"
              data-id="70376fb2" data-element_type="widget" data-widget_type="image.default">
              <div class="elementor-widget-container">
               <div class="elementor-widget-container">
                <img src="./pages/mapgsk.png" data-placeholder-resp="768x501"
                  
                  decoding="async" width="768" height="501"
                  
                  class="attachment-medium_large size-medium_large wp-image-18 entered litespeed-loaded" alt=""
                  
                  data-sizes="(max-width: 768px) 100vw, 768px" data-ll-status="loaded"
                  sizes="(max-width: 768px) 100vw, 768px"
                  >
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <style>
    .lightbox {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.8);
        text-align: center;
        z-index: 999;
    }

    .lightbox-content {
        position: relative;
        top: 50%;
        transform: translateY(-50%);
    }

    .lightbox img {
        max-width: 80%;
        max-height: 80vh; /* Adjust the max height as needed */
        display: block;
        margin: 0 auto;
    }

    .lightbox button {
        background: none;
        border: none;
        color: #fff;
        font-size: 24px;
        cursor: pointer;
    }
  </style>

  <section class="w-3/4 mx-auto p-6">
    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-2e160bd4"
      data-id="2e160bd4" data-element_type="column">
      <div class="elementor-widget-wrap elementor-element-populated">
        <section
          class="elementor-section elementor-inner-section elementor-element elementor-element-6488e72a elementor-section-boxed elementor-section-height-default elementor-section-height-default"
          data-id="6488e72a" data-element_type="section">
          <div class="elementor-container elementor-column-gap-default">
            <div
              class="mx-auto"
              data-id="60c803bc" data-element_type="column" style="width:700px;height: 493px;">
              <div class="elementor-widget-wrap elementor-element-populated mx-auto" style="width:700px;height: 493px;">
                <div
                  class="elementor-element elementor-element-28619a22 de_scroll_animation_no elementor-widget elementor-widget-video"
                  style="width:700px;height: 433px;"
                  data-id="28619a22" data-element_type="widget"
                  data-settings="{&quot;youtube_url&quot;:&quot;https:\/\/https://www.youtube.com/embed/OixO7nCFNyI?controls=1&quot;,&quot;video_type&quot;:&quot;youtube&quot;,&quot;controls&quot;:&quot;yes&quot;}"
                  data-widget_type="video.default">
                  <div class="elementor-widget-container" style="width:700px;height: 433px;">
                    <div class="elementor-wrapper elementor-open-inline" style="width:700px;height: 433px;"><iframe class="elementor-video" frameborder="0"
                        allowfullscreen="1"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        title="Video Interior Rumah Blok A +Rooftop, Kolam Renang &amp; Smarthhome + di Perumahan Marifa Skyland Beduri"
                        width="700px" height="433px"
                        src="https://www.youtube.com/embed/OixO7nCFNyI?controls=1&amp;rel=0&amp;playsinline=0&amp;modestbranding=0&amp;autoplay=0&amp;enablejsapi=1&amp;origin=https%3A%2F%2Fwww.marifa.id&amp;widgetid=3"
                        id="widget4"></iframe></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <div
          class="elementor-element elementor-element-23cb53b9 elementor-hidden-phone de_scroll_animation_no elementor-widget elementor-widget-image-gallery"
          data-id="23cb53b9" data-element_type="widget" data-widget_type="image-gallery.default">
          <div class="elementor-widget-container">
            <div class="elementor-image-gallery ">
              <div id="gallery-3" class="gallery galleryid-2604 gallery-columns-4 gallery-size-medium grid grid-cols-3 gap-6 gallery-container">
                <?php foreach([
                  [
                    "icon",
                    "Tanpa Riba",
                    "Sebagai seorang muslim seharusnya menjauhi riba, karena ancaman riba menakutkan baik  ancaman di dunia maupun di akhirat."
                  ],
                  [
                    "icon",
                    "Tanpa Pihak Ketiga",
                    "Sebagai seorang muslim seharusnya menjauhi riba, karena ancaman riba menakutkan baik  ancaman di dunia maupun di akhirat."
                  ],
                  [
                    "icon",
                    "Tanpa Sita Paksa",
                    "Sebagai seorang muslim seharusnya menjauhi riba, karena ancaman riba menakutkan baik  ancaman di dunia maupun di akhirat."
                  ],
                  [
                    "icon",
                    "Tanpa Akad Bermasalah",
                    "Sebagai seorang muslim seharusnya menjauhi riba, karena ancaman riba menakutkan baik  ancaman di dunia maupun di akhirat."
                  ],
                  [
                    "icon",
                    "Tanpa Akad Bermasalah",
                    "Sebagai seorang muslim seharusnya menjauhi riba, karena ancaman riba menakutkan baik  ancaman di dunia maupun di akhirat."
                  ],
                  [
                    "icon",
                    "Tanpa Asuransi",
                    "Sebagai seorang muslim seharusnya menjauhi riba, karena ancaman riba menakutkan baik  ancaman di dunia maupun di akhirat."
                  ]
                ] as $k => $row): ?>
                <figure class="w-full thumbnail">
                  <div class="gallery-icon landscape">
                    <a data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="23cb53b9"
                      data-elementor-lightbox-title="Tips Membeli Perumahan Ponorogo Supaya Menguntungkan"
                      data-elementor-lightbox-description="Tips Membeli Perumahan Ponorogo Supaya Menguntungkan"
                      data-e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MzAsInVybCI6Imh0dHBzOlwvXC93d3cubWFyaWZhLmlkXC93cC1jb250ZW50XC91cGxvYWRzXC8yMDIyXC8xMFwvRm90by1EZXNhaW4tUnVhbmctVGFtdS1QZXJ1bWFoYW4tU2t5bGFuZC1Qb25vcm9nby5qcGVnIiwic2xpZGVzaG93IjoiMjNjYjUzYjkifQ%3D%3D"
                      href="#"><img
                        src="./pages/c-<?= $k+1 ?>.png"
                        class="attachment-medium size-medium entered litespeed-loaded w-full"
                        alt="Tips Membeli Perumahan Ponorogo Supaya Menguntungkan"
                          />
                        </a>
                        <!-- width="300" height="300" -->

                  </div>
                  <figcaption class="wp-caption-text gallery-caption text-center w-full" id="gallery-3-30">
                    Tips Membeli Perumahan Ponorogo Supaya Menguntungkan</figcaption>
                </figure>
                <?php endforeach; ?>

                <div class="lightbox">
                    <div class="lightbox-content">
                        <button class="close-button">&#10006;</button>
                        <img src="" alt="Full-size Image">
                        <button class="prev-button">&#9664;</button>
                        <button class="next-button">&#9654;</button>
                    </div>
                </div>

                <script>
                    // JavaScript to handle thumbnail clicks
                    const thumbnails = document.querySelectorAll('.thumbnail');
                    const lightbox = document.querySelector('.lightbox');
                    const lightboxImage = lightbox.querySelector('img');
                    const closeButton = lightbox.querySelector('.close-button');
                    const prevButton = lightbox.querySelector('.prev-button');
                    const nextButton = lightbox.querySelector('.next-button');

                    let currentIndex = 0;

                    thumbnails.forEach((thumbnail, index) => {
                        thumbnail.addEventListener('click', () => {
                            const thumbnailImage = thumbnail.querySelector('img');
                            lightboxImage.src = thumbnailImage.src;
                            lightbox.style.display = 'block';
                            currentIndex = index;
                            document.getElementsByTagName("nav")[0].style.display = "none"
                        });
                    });

                    closeButton.addEventListener('click', () => {
                        lightbox.style.display = 'none';
                        document.getElementsByTagName("nav")[0].style.display = "block"
                    });

                    prevButton.addEventListener('click', () => {
                        if (currentIndex > 0) {
                            currentIndex--;
                            const prevThumbnail = thumbnails[currentIndex].querySelector('img');
                            lightboxImage.src = prevThumbnail.src;
                        }
                    });

                    nextButton.addEventListener('click', () => {
                        if (currentIndex < thumbnails.length - 1) {
                            currentIndex++;
                            const nextThumbnail = thumbnails[currentIndex].querySelector('img');
                            lightboxImage.src = nextThumbnail.src;
                        }
                    });
                </script>
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
    
  <div style="background: black;" id="contact">    
    <section class="py-16 w-1/2 mx-auto text-center text-white">
      <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-6bc29f2"
        data-id="6bc29f2" data-element_type="column">
        <div class="elementor-widget-wrap elementor-element-populated">
          <div
            class="elementor-element elementor-element-f0c291b de_scroll_animation_no elementor-widget elementor-widget-video mx-auto"
            data-id="f0c291b" data-element_type="widget"
            style="width:100%; height: 400px;"
            data-settings="{&quot;youtube_url&quot;:&quot;https:\/\/www.youtube.com/embed/OixO7nCFNyI&quot;,&quot;video_type&quot;:&quot;youtube&quot;,&quot;controls&quot;:&quot;yes&quot;}"
            data-widget_type="video.default">
            <div style="height: 400px">
              <div class="elementor-wrapper elementor-open-inline" style="height: 400px">
                <iframe frameborder="0"
                  allowfullscreen="1"
                  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                  title="Grand Shafa" width="640"
                  height="400"
                  src="https://www.youtube.com/embed/OixO7nCFNyI?controls=1&amp;rel=0&amp;playsinline=0&amp;modestbranding=0&amp;autoplay=0&amp;enablejsapi=1&amp;origin=https%3A%2F%2Fwww.marifa.id&amp;widgetid=13"
                  id="widget14"></iframe></div>
            </div>
          </div>
          <div
            class="elementor-element elementor-element-69a575e de_scroll_animation_no elementor-widget elementor-widget-heading"
            data-id="69a575e" data-element_type="widget" data-widget_type="heading.default">
            <div class="elementor-widget-container">
              <h2 class="elementor-heading-title elementor-size-default text-3xl font-semibold mb-4 text-white"><b><b>Video profile Grand Shafa</b></b></h2>
            </div>
          </div>
          <div
            class="elementor-element elementor-element-94f7c69 de_scroll_animation_no elementor-widget elementor-widget-heading"
            data-id="94f7c69" data-element_type="widget" data-widget_type="heading.default">
            <div class="elementor-widget-container">
              <h6 class="elementor-heading-title elementor-size-default text-3xl font-semibold mb-4 text-white" style="color: #fae1b3;"><b><b>Perumahan syariah modern</b></b>
              </h6>
            </div>
          </div>
          <div
            class="elementor-element elementor-element-e5fd093 de_scroll_animation_no elementor-widget elementor-widget-heading"
            data-id="e5fd093" data-element_type="widget" data-widget_type="heading.default">
            <div class="elementor-widget-container">
              <h6 class="elementor-heading-title elementor-size-default text-white"><b><b>Perumahan Syariah, Mewah, dan modern
                    Lokasi Strategis &amp; Bebas Banjir</b></b></h6>
            </div>
          </div>
          <div
            class="elementor-element elementor-element-688e003 de_scroll_animation_no elementor-widget elementor-widget-heading"
            data-id="688e003" data-element_type="widget" data-widget_type="heading.default">
            <div class="elementor-widget-container">
              <h2 class="elementor-heading-title elementor-size-default text-4xl font-semibold mb-4 text-white" style="color: #fae1b3;"><b><b>Harga Mulai 400 jutaan. Bisa diangsur Tanpa
                    Riba</b></b></h2>
            </div>
          </div>
          <div
            class="elementor-element elementor-element-9914c8c de_scroll_animation_no elementor-widget elementor-widget-heading"
            data-id="9914c8c" data-element_type="widget" data-widget_type="heading.default">
            <div class="elementor-widget-container">
              <h6 class="elementor-heading-title elementor-size-default text-white"><b><b>Tunggu apa lagi? Segera! Sebelum harga naik!</b></b></h6>
            </div>
          </div>
          <div
            class="elementor-element elementor-element-ec9c1a7 elementor-align-center de_scroll_animation_no elementor-widget elementor-widget-button"
            data-id="ec9c1a7" data-element_type="widget" data-widget_type="button.default">
            <div class="elementor-widget-container">
              <div class="elementor-button-wrapper"><b><b>
                    <a class="elementor-button elementor-button-link elementor-size-sm bg-blue-700 text-white" href="wa.me/081132016789">
                      <span class="elementor-button-content-wrapper">
                        <span class="elementor-button-icon elementor-align-icon-left">
                          <i aria-hidden="true" class="fab fa-whatsapp"></i> </span>
                        <span class="elementor-button-text">Hubungi Kami</span>
                      </span>
                    </a></b></b></div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <script>
    // Get references to the elements
    const nav = document.querySelector('nav');
    const jumbotron = document.getElementById('jumbotron');

    // Function to update navigation background
    function updateNavBackground() {
      if (window.scrollY > jumbotron.offsetHeight) {
        nav.classList.add('bg-cc1');
      } else {
        nav.classList.remove('bg-cc1');
      }
    }

    // Initial call to set the initial state
    updateNavBackground();

    // Listen for scroll events and update the navigation background accordingly
    window.addEventListener('scroll', updateNavBackground);
  </script>

</body>

</html>