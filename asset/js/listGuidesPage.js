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
                            <td class="px-6 py-4"><span class="text-green-600 font-semibold">Active</span></td>
                            <td class="px-6 py-4 space-x-2">
                                <button
                                    class="px-3 py-1 bg-secondary text-black rounded hover:bg-amber-400">Edit</button>
                                <button class="px-3 py-1 bg-red-600 text-white rounded hover:bg-red-700">Cancel</button>
                            </td>
                        </tr>`
        guidesContainers.innerHTML += block;
    });
};
function loadGuides(){
    fetch("/youcode/ASSAD/Pages/guide/api/listGuide.php")
        .then(res => res.json())
        .then(data => displayAllGuides(data))
        .catch(err => console.error(err));
};
loadGuides();