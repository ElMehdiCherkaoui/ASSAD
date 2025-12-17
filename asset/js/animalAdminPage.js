function displayAllAnimals(animals) {
    const animalContainer = document.getElementById("animalContainer");
    animalContainer.innerHTML = "";
    animals.forEach((a) => {
        const block = `  <tr>
                        <td class="px-6 py-4">"${a.Ani_id}"</td>
                        <td class="px-6 py-4">"${a.animalName}"</td>
                        <td class="px-6 py-4">"${a.espèce}"</td>
                        <td class="px-6 py-4">"${a.habitatsName}"</td>
                        <td class="px-6 py-4">"${a.paysOrigine}"</td>
                        <td class="px-6 py-4">
                            <img src="${a.Image}" alt="Asaad" class="w-12 h-12 rounded">
                        </td>
                        <td class="px-6 py-4 space-x-2">
                            <button class="EditBtn bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-600">Edit</button>
                            <button class="deleteBtn bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600">Delete</button>
                        </td>
                    </tr>`
        animalContainer.innerHTML += block;
    });
}

function loadAnimal() {
    fetch("/youcode/ASSAD/Pages/admin/api/apiAnimal/list.php")
        .then(res => res.json())
        .then(data => displayAllAnimals(data, console.log(data)))
        .catch(err => console.error(err));
}
loadAnimal();



// const addAnimalBtn = document.getElementById('addAnimalBtn');
// const addAnimalModal = document.getElementById('addAnimalPopup');
// const closeModal = document.getElementById('closeModal');
// const cancelBtn = document.getElementById('cancelBtn');
// const habitatSelect = document.getElementById('habitatSelect');
// const addAnimalForm = document.getElementById('addAnimalForm');


// addAnimalBtn.addEventListener('click', () => addAnimalModal.classList.remove('hidden'));


// closeModal.addEventListener('click', () => addAnimalModal.classList.add('hidden'));
// cancelBtn.addEventListener('click', () => addAnimalModal.classList.add('hidden'));

// fetch("/youcode/ASSAD/Pages/admin/api/apiAnimal/habitats-list.php")
//     .then(res => res.json())
//     .then(data => {
//         data.forEach(h => {
//             const option = document.createElement('option');
//             option.value = h.Hab_id;
//             option.textContent = h.habitatsName;
//             habitatSelect.appendChild(option);
//         });
//     })
//     .catch(err => console.error(err));


// addAnimalForm.addEventListener('submit', (e) => {
//     e.preventDefault();

//     const formData = new FormData(addAnimalForm);

//     fetch('/youcode/ASSAD/Pages/admin/api/apiAnimal/add.php', {
//         method: 'POST',
//         body: formData
//     })
//         .then(res => res.json())
//         .then(data => {
//             if (data.success) {
//                 alert('Animal added successfully!');
//                 addAnimalForm.reset();
//                 addAnimalModal.classList.add('hidden');
//             } else {
//                 alert('Error adding animal.');
//             }
//         })
//         .catch(err => console.error(err));
// });
