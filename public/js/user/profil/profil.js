$("#kt_daterangepicker_3").daterangepicker({
    singleDatePicker: true,
    showDropdowns: true,
    minYear: 1901,
    maxYear: parseInt(moment().format("YYYY"), 12),
    locale: {
        format: "DD MMMM YYYY",
        monthNames: [
            "Januari",
            "Februari",
            "Maret",
            "April",
            "Mei",
            "Juni",
            "Juli",
            "Agustus",
            "September",
            "Oktober",
            "November",
            "Desember",
        ],
        daysOfWeek: ["Min", "Sen", "Sel", "Rab", "Kam", "Jum", "Sab"],
    },
});

$.ajax({
    url: "/api/user/{{ Auth::user()->id }}",
    type: "GET",
    success: function (data) {
        console.log(data);
        const fullName = data.nama_lengkap;

        // Pisahkan nama lengkap berdasarkan spasi
        const nameParts = fullName.split(" ");

        // Ambil nama depan (kata pertama)
        const firstName = nameParts[0];

        // Ambil nama belakang (kata terakhir)
        const lastName = nameParts[nameParts.length - 1];

        $('input[name="fname"]').val(firstName);
        $('input[name="lname"]').val(lastName);
        $('select[name="kelamin"]').val(data.jenis_kelamin);
        $('input[name="tempatlahir"]').val(data.tmp_lahir);
        $('input[name="tanggal_lahir"]').val(data.tgl_lahir);
        $('select[name="agama"]').val(data.agama);
        $('select[name="negara"]').val(data.kewarganegaraan).change();
        $('input[name="ktp"]').val(data.no_ktp);
        $('input[name="alamat"]').val(data.alamat);
        $('input[name="email"]').val(data.email);
        $('input[name="telepon"]').val(data.no_hp);
        $('input[name="whatsapp"]').val(data.no_wa);
        $('input[name="sekolah"]').val(data.asal_sma);
        $('select[name="lulus-sekolah"]').val(data.tahun_lulus);
        $('input[name="asal-pt"]').val(data.asal_pt);
        $('input[name="prodi-sebelumnya"]').val(data.prodi_pt);
        $('input[name="ayah"]').val(data.nama_ayah);
        $('input[name="ibu"]').val(data.nama_ibu);
        $('input[name="kps"]').val(data.penerima_kps);
        $('select[name="jtinggal"]').val(data.jenis_tinggal);
        $('input[name="foto"]').val(data.pas_foto);
        $('input[name="ktp"]').val(data.foto_ktp);
        $('select[name="transportasi"]').val(data.alat_transportasi);
    },
});

$("#form_data_pribadi").on("submit", function (e) {
    e.preventDefault();

    const userId = "{{ Auth::user()->id }}";
    const formData = {
        nama_lengkap: $('input[name="nama_lengkap"]').val(),
        tmp_lahir: $('input[name="tmp_lahir"]').val(),
        tgl_lahir: $('input[name="tgl_lahir"]').val(),
        // Tambahkan field lainnya
    };

    $.ajax({
        url: `/api/user/${userId}`,
        type: "PUT",
        data: formData,
        success: function (response) {
            console.log(response);
            alert("Data Pribadi berhasil diperbarui");
        },
        error: function (xhr) {
            console.error(xhr.responseJSON);
            alert("Terjadi kesalahan saat memperbarui Data Pribadi");
        },
    });
});

$("#form_orangtua").on("submit", function (e) {
    e.preventDefault(); // Mencegah submit default

    const userId = "{{ Auth::user()->id }}"; // ID User
    const formData = {
        nama_ayah: $('input[name="ayah"]').val(),
        nama_ibu: $('input[name="ibu"]').val(),
        penerima_kps: $('select[name="kps"]').val(),
        jenis_tinggal: $('select[name="jtinggal"]').val(),
    };

    $.ajax({
        url: `/api/user/${userId}`, // Endpoint update
        type: "PUT", // HTTP method
        data: formData,
        success: function (response) {
            console.log(response);
            alert("Data berhasil diperbarui");
        },
        error: function (xhr) {
            console.error(xhr.responseJSON);
            alert("Terjadi kesalahan saat memperbarui data");
        },
    });
});

console.log("Profil.js loaded successfully!");