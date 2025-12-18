function displayAllHabitats(habitats) {
    const habitatContainer = document.getElementById("habitatContainer");
    habitatContainer.innerHTML = "";
    habitats.forEach((h) => {
        const block = `  <tr>
                        <td class="px-6 py-4">"${h.Hab_id}"</td>
                        <td class="px-6 py-4">"${h.habitatsName}"</td>
                        <td class="px-6 py-4">"${h.typeClimat}"</td>
                        <td class="px-6 py-4">"${h.zoo_zone}"</td>
                        <td class="px-6 py-4 w-[20em]">"${h.descriptionHab}"</td>

                        <td class="px-6 py-4 space-x-2">
                           <button onclick='openEditHabitatsModal(${JSON.stringify(h)})' class="EditBtn bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-600">Edit</button>
                            <button onclick="deleteHabitats(${h.Hab_id})"  class="deleteBtn bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600">Delete</button>
                        </td>
                    </tr>`
        habitatContainer.innerHTML += block;
    });
}

function loadHabitats() {
    fetch("/youcode/ASSAD/Pages/admin/api/apiHabitats/list.php")
        .then(res => res.json())
        .then(data => displayAllHabitats(data))
        .catch(err => console.error(err));
}


loadHabitats();
const addHabitatsPopup = document.getElementById("addHabitatsPopup");
const closeModal = document.getElementById("closeModal");
const cancelBtn = document.getElementById("cancelBtn");
document.getElementById("openHabitatsPopup").addEventListener("click", () => {
    addHabitatsPopup.classList.remove("hidden");

});
closeModal.addEventListener("click", () => {
    addHabitatsPopup.classList.add("hidden");
});
cancelBtn.addEventListener("click", () => {
    addHabitatsPopup.classList.add("hidden");
});

document.getElementById("addHabitatsForm").addEventListener('click', (e) => {

    e.preventDefault();

    const formData = new FormData();

    formData.append("Name", document.getElementById("habitatsName").value);
    formData.append("type", document.getElementById("typeClimat").value);
    formData.append("description", document.getElementById("descriptionHab").value);
    formData.append("zone", document.getElementById("zoo_zone").value);

    fetch("/youcode/ASSAD/Pages/admin/api/apiHabitats/add.php", {
        method: "POST",
        body: formData
    })
        .then(res => res.json())
        .then(result => {
            if (result.success) {
                alert("Habitats added successfully!");
                loadHabitats();
                addHabitatsPopup.classList.add("hidden");

            } else {
                alert(result.message || "Error: could not save habitats.");
            }
        })
        .catch(err => console.error("Fetch Error:", err));
});


function deleteHabitats(id) {
    if (!confirm("Are you sure you want to delete this Habitat?")) {
        return;
    }

    let formData = new FormData();
    formData.append("id_Hab", id);

    fetch("/youcode/ASSAD/Pages/admin/api/apiHabitats/delete.php", {
        method: "POST",
        body: formData
    })
        .then(res => res.json())
        .then(result => {
            if (result.success) {
                alert("habitat deleted successfully!");
                loadHabitats();
            } else {
                alert("Error deleting Habitat.");
            }
        })
        .catch(err => console.error("Delete error:", err));
}