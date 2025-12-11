document.addEventListener("DOMContentLoaded", () => {
    const faculty = document.getElementById("faculty");
    const specialty = document.getElementById("specialty");

    faculty.addEventListener("change", function () {
        const faculty_id = this.value;

        specialty.innerHTML = '<option value="">Yüklənir...</option>';

        fetch("get_specialties.php?faculty_id=" + faculty_id)
            .then(res => res.json())
            .then(data => {
                specialty.innerHTML = '<option value="">İxtisas seçin</option>';

                data.forEach(item => {
                    const opt = document.createElement("option");
                    opt.value = item.id;
                    opt.textContent = item.name;
                    specialty.appendChild(opt);
                });
            });
    });
});
