<?php include "config.php"; ?>
<!DOCTYPE html>
<html lang="az">
<head>
    <meta charset="UTF-8">
    <title>SmartQueue</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <h1>SmartQueue - Növbə Sistemi</h1>
</header>

<main>
    <form id="ticketForm" method="POST" action="create_ticket.php">
        <h2>Bilet Qeydiyyat Formu</h2>

        <label>Ad Soyad</label>
        <input type="text" name="fullname" required>

        <label>Fakültə</label>
        <select name="faculty" id="faculty" required>
            <option value="">Fakültə seçin</option>
        </select>

        <label>İxtisas</label>
        <select name="specialty" id="specialty" required>
            <option value="">İxtisas seçin</option>
        </select>

        <label>Qrup</label>
        <input type="text" name="group">

        <label>Xidmət</label>
        <select name="service" required>
            <option>Dekanlıq</option>
            <option>Maliyyə Şöbəsi</option>
            <option>Tələbə məsələləri</option>
            <option>Qəbul otağı</option>
        </select>

        <button type="submit">Növbə Al</button>
    </form>
</main>

<script>
document.addEventListener("DOMContentLoaded", function () {
    // Fakültələri yüklə
    fetch("get_faculties.php")
        .then(r => r.json())
        .then(data => {
            const faculty = document.getElementById("faculty");
            data.forEach(f => {
                let opt = document.createElement("option");
                opt.value = f.id;
                opt.textContent = f.name;
                faculty.appendChild(opt);
            });
        });

    // Fakültə seçildikdə ixtisasları gətir
    document.getElementById("faculty").addEventListener("change", function () {
        let id = this.value;

        fetch("get_specialties.php?faculty_id=" + id)
            .then(r => r.json())
            .then(data => {
                const specialty = document.getElementById("specialty");
                specialty.innerHTML = "<option value=''>İxtisas seçin</option>";

                data.forEach(s => {
                    let opt = document.createElement("option");
                    opt.value = s.id;
                    opt.textContent = s.name;
                    specialty.appendChild(opt);
                });
            });
    });
});
</script>

</body>
</html>
