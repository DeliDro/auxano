<div class="flex flex-col">
  <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
      <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
        <table class="min-w-full divide-y divide-gray-200">
            <p class="text-xl pb-6 flex items-center p-2">
                <i class="fas fa-list mr-3"></i> <a id="table-title"></a>
            </p>
            
            <!-- Titre / Image / Tags / Date / Contenu -->
            <thead class="bg-blue-500"> <tr id="table-heads"></tr></thead>

            <!-- Lignes -->
            <tbody class="bg-white divide-y divide-gray-200" id="table-body"></tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<script>
function setTableTitle(title) {
    document.getElementById("table-title").innerHTML = title;
}

function setTHead(heads) {
    const tHead = document.getElementById("table-heads");

    heads = heads.map(head =>
        `<th scope="col" class="px-6 py-3 text-left text-xs font-medium font-bold text-white uppercase tracking-wider">
            ${head}
        </th>`
    );

    heads.push(`<th scope="col" class="relative px-6 py-3"><span class="sr-only">Modifier</span>`);

    tHead.innerHTML = heads.join("");
}

function setTBody(lines, schema, heads) {
    const tBody = document.getElementById("table-body");

    const body = [];

    for (const data of lines) {
        const raw = ["<tr>"];

        let colIndex = 0;
        
        for (i of heads) {
            if(i !== "id") raw.push(formatRaw(i, data[i], schema));
        }

        raw.push(`
            <td
                class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium cursor-pointer"
            >
                <div class="text-gray-500 hover:text-blue-400">
                    <a target="_blank" href="/${schema.slice(0, schema.length-1)}.php?id=${data.id}">Afficher</a>
                </div>
                <div class="text-gray-500 hover:text-green-400" onclick="showEdit(${data.id})">
                    Modifier
                </div>
                <div>
                    <a class="text-gray-500 hover:text-red-400" href="data-handler/delete.php?on=${schema}&id=${data.id}">
                        Supprimer
                    </a>
                <div>
            </td></tr>`
        );
        
        body.push(raw.join(""));
    }

    tBody.innerHTML = body.join("");
}

function formatRaw(key_, value, schema){
    let output = `<td class="px-6 py-4 whitespace-nowrap">`;
    
    switch (schema) {
        case "publications":
            if (key_ === "tags") {
                value = value.split(",");
                
                output += value
                    .map(tag => 
                        `<div class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-500 text-white mr-2">
                            ${tag}
                        </div>`
                    )
                    .join("");
            }

            else {
                output += `<div class="text-sm text-gray-900">${key_ === "contenu" ? value.slice(0, 50) + "..." : value }</div>`
            }
            
            break;

        case "produits":
            if (key_ === "categorie") {
                value = value.split(",");
                
                output += value
                    .map(tag => 
                        `<div class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-500 text-white mr-2">
                            ${tag}
                        </div>`
                    )
                    .join("");
            }

            else {
                output += `<div class="text-sm text-gray-900">${key_ === "contenu" ? value.slice(0, 50) + "..." : value }</div>`
            }
            
            break;
        
        default:
            output += `<div class="text-sm text-gray-900">${key_ === "contenu" ? value.slice(0, 50) + "..." : value }</div>`;
            break;
    }

    output += "</td>";

    return output;
}
</script>
