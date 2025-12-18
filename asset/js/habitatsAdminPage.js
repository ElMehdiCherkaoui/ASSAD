function displayAllHabitats(habitats) {
    const habitatContainer = document.getElementById("habitatContainer");
    habitatContainer.innerHTML = "";
    habitats.forEach((h) => {
        const block = `  <tr>
                        <td class="px-6 py-4">"${h.Hab_id}"</td>
                        <td class="px-6 py-4">"${h.habitatsName}"</td>
                        <td class="px-6 py-4">"${h.typeClimat}"</td>
                        <td class="px-6 py-4">"${h.zoo_zone}"</td>
                        <td class="px-6 py-4 w-[10em]">"${h.descriptionHab}"</td>

                        <td class="px-6 py-4 space-x-2">
                           <button onclick='openEditAnimalModal(${JSON.stringify(h)})' class="EditBtn bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-600">Edit</button>
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