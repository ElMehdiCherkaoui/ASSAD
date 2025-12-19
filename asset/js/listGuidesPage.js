function displayAllGuides(Guides) {
    const guidesContainers = document.getElementById("guidesContainers");
    guidesContainers.innerHTML = "";
    Guides.forEach((g) => {
        const block = `                          <tr>
                            <td class="px-6 py-4">"${g.title}"</td>
                            <td class="px-6 py-4">"${g.date_time}"</td>
                            <td class="px-6 py-4">"${g.languages}"</td>
                            <td class="px-6 py-4">"${g.max_capacity}"</td>
                            <td class="px-6 py-4">"${g.price}"</td>
                            <td class="px-6 py-4">"${g.statut}"</td>
                            <td class="px-6 py-4 space-x-2">
                            <button onclick='' class="px-3 py-1 bg-blue-600 text-white rounded hover:bg-blue-700">Etapes</button>
                                <button onclick='openEditGuideModal(${JSON.stringify(g)})'
                                    class="px-3 py-1 bg-secondary text-black rounded hover:bg-amber-400">Edit</button>
                                <button onclick='changeStatus(${JSON.stringify(g)})' class="px-3 py-1 bg-red-600 text-white rounded hover:bg-red-700">Cancel</button>

                            </td>
                        </tr>`
        guidesContainers.innerHTML += block;
    });
};
function loadGuides() {
    fetch("/youcode/ASSAD/Pages/guide/api/listGuide.php")
        .then(res => res.json())
        .then(data => displayAllGuides(data))
        .catch(err => console.error(err));
};
loadGuides();


function openEditGuideModal(Guide) {
    const modal = document.getElementById("formPopup");
    const form = document.getElementById("formGuide");

    modal.classList.remove("hidden");


    document.getElementById("closeEditModal").addEventListener("click", () => {
        modal.classList.add("hidden");
    });

    form.titles.value = Guide.title;
    form.date.value = Guide.date_time.split(" ")[0];
    form.capacity.value = Guide.max_capacity;
    form.duration.value = Guide.duree;
    form.language.value = Guide.languages;
    form.price.value = Guide.price;
    document.getElementById("ediguiId").value = Guide.guided_id;



    document.getElementById("submitButtonGuide").addEventListener('click', (e) => {
        e.preventDefault();

        const formData = new FormData();
        formData.append("ediguiId", document.getElementById("ediguiId").value);
        formData.append("title", document.getElementById("titles").value);
        formData.append("date", document.getElementById("date").value);
        formData.append("duration", document.getElementById("duration").value);
        formData.append("language", document.getElementById("language").value);
        formData.append("capacity", document.getElementById("capacity").value);
        formData.append("price", document.getElementById("price").value);

        fetch("/youcode/ASSAD/Pages/guide/api/edit.php", {
            method: "POST",
            body: formData
        })
            .then(res => res.json())
            .then(result => {
                if (result.success) {
                    alert("Guide updated successfully!");
                    loadGuides();
                    document.getElementById("formPopup").classList.add("hidden");
                } else {
                    alert(result.message || "Error: could not update guide.");
                }
            })
            .catch(err => console.error("Fetch Error:", err));
    });
}

function changeStatus(Guide) {

    const formData = new FormData();
    formData.append("ediguiId", Guide.guided_id);
    formData.append("status", "Disabled");

    fetch("/youcode/ASSAD/Pages/guide/api/cancleVisit.php", {
        method: "POST",
        body: formData
    })
        .then(res => res.json())
        .then(result => {
            if (result.success) {
                alert("Guide Disabled successfully!");
                loadGuides();
            } else {
                alert(result.message || "Error: could not update guide.");
            }
        })
        .catch(err => console.error("Fetch Error:", err));
}