const body = document.body;
const sidebar = document.querySelector('.main-sidebar');
const openSidebar = document.querySelector('#openSidebar');
const closeSidebar = document.querySelector('#closeSidebar');
const toggleTheme = document.querySelector('.toggle-theme');
const light = toggleTheme.children[0];
const dark = toggleTheme.children[1];
const inputFields = document.querySelectorAll('.percentage p');

openSidebar.addEventListener('click', openSidebarFunction);
closeSidebar.addEventListener('click', closeSidebarFunction);
toggleTheme.addEventListener('click', changeTheme);

function openSidebarFunction() {
    sidebar.style.left = '0%';
}

function closeSidebarFunction() {
    sidebar.style.left = '-100%';
}

function changeTheme() {
    if (body.classList.contains('dark-mode')) {
        lightMode();
    } else if (!body.classList.contains('dark-mode')) {
        darkMode();
    }
}

inputFields.forEach((e, i) => {
    let val = parseInt(e.textContent);
    console.log(val);
    let circle = document.getElementById(`circle${i + 1}`);
    let r = circle.getAttribute('r');
    let circ = Math.PI * 2 * r;
    let counter = 0;
    let fillValue = (circ * (100 - val)) / 100;
    setInterval(() => {
        if (counter === val) {
            clearInterval();
        } else {
            counter += 1;
            e.innerText = counter + '%';
            circle.style.strokeDashoffset = fillValue;
        }
    }, 1000 / val);
});

if (window.matchMedia('(prefers-color-scheme: dark)').matches) {
    darkMode();
}

function darkMode() {
    body.classList.add('dark-mode');
    light.classList.remove('active');
    dark.classList.add('active');
}

function lightMode() {
    body.classList.remove('dark-mode');
    dark.classList.remove('active');
    light.classList.add('active');
}

$(document).ready(function() {
                
    $(document).on('click', '.addnew', function(e){
        e.preventDefault();
        $('#addnew').modal('show');
        var id = $(this).attr('data-id');
        $('.donid').val(id);
    });

    //donneur
    $(document).on('click', '.edit', function(e){
        e.preventDefault();
        $('#edit').modal('show');
        var id = $(this).attr('data-id');
        $('.donid').val(id);

        $.ajax({
            url: "./admin/controllers/get_donneur.php",
            type: "post",
            data: {id:id},
            dataType: 'json',
            success: function(data){
                $('#edit_name').val(data.nomDon);
                $('#edit_sexe').val(data.sexe);
                $('#edit_nbre').val(data.nbrB);
            }
        });
    });

    $(document).on('click', '.delete', function(e){
        e.preventDefault();
        $('#delete').modal('show');
        var id = $(this).attr('data-id');
        $('.donid').val(id);

        $.ajax({
            url: "./admin/controllers/get_donneur.php",
            type: "post",
            data: {id:id},
            dataType: 'json',
            success: function(data){
              $('.donneurname').html(data.nomDon);
            }
        });
    });

    //receveur
    $(document).on('click', '.edit', function(e){
        e.preventDefault();
        $('#edit_receve').modal('show');
        var id = $(this).attr('data-id');
        $('.receveid').val(id);

        $.ajax({
            url: "./admin/controllers/get_receveur.php",
            type: "post",
            data: {id:id},
            dataType: 'json',
            success: function(data){
                $('#edit_nom').val(data.nomRe);
                $('#edit_sexe_re').val(data.sexeR);
                $('#edit_localite').val(data.localite);
            }
        });
    });

    $(document).on('click', '.delete', function(e){
        e.preventDefault();
        $('#delete_receve').modal('show');
        var id = $(this).attr('data-id');
        $('.receveid').val(id);

        $.ajax({
            url: "./admin/controllers/get_receveur.php",
            type: "post",
            data: {id:id},
            dataType: 'json',
            success: function(data){
              $('.receveurname').html(data.nomRe);
            }
        });
    });

    //donneur & receveur
    $(document).on('click', '.edit', function(e){
        e.preventDefault();
        $('#edit_receve').modal('show');
        var id = $(this).attr('data-id');
        $('.don_re_id').val(id);

        $.ajax({
            url: "./admin/controllers/get_donneur_receveur.php",
            type: "post",
            data: {id:id},
            dataType: 'json',
            success: function(data){
                $('#edit_nom_d').val(data.nomDon);
                $('#edit_nom_r').val(data.nomRe);
                //$('#edit_nom_d option[value="' + data.nomDon + '"]').prop('selected', true);
                //$('#edit_nom_r option[value="' + data.nomRe + '"]').prop('selected', true);
                $('#nbr_r').val(data.nbreB);
            }
        });
    });

    $(document).on('click', '.delete', function(e){
        e.preventDefault();
        $('#delete_receve').modal('show');
        var id = $(this).attr('data-id');
        $('.don_re_id').val(id);

        $.ajax({
            url: "./admin/controllers/get_donneur_receveur.php",
            type: "post",
            data: {id:id},
            dataType: 'json',
            success: function(data){
              $('.don_re_name').html(data.nomDon+' & '+data.nomRe);
            }
        });
    });

    //search
    /*$.ajax({
        url: './admin/controllers/get_donneur_receveur.php',
        //url: './admin/controllers/get_d_r.php',
        type: 'get',
        dataType: 'json',
        success: function(data) {
            var tab = $('#tab');        
            
            if (data.length > 0) {
                data.forEach(function(item, index) {
                    var row = `
                        <tr>
                            <td>${index + 1}</td>
                            <td>${item.nomDon}</td>
                            <td class="text-fuscha">${item.nbrB}</td>
                            <td>${item.sexe}</td>
                            <td>${item.nomRe}</td>
                            <td class="text-fuscha">${item.nbreB}</td>
                            <td>${item.sexeR}</td>
                            <td>${item.localite}</td>
                            <td>
                                <button class='edit_btn edit' data-id="${item.id}" title="Edit">Edit</button>
                                <button class='del_btn delete' data-id="${item.id}" title="Delete">Delete</button>
                            </td>
                        </tr>
                    `;
            
                    tab.append(row);
                });
            }
            console.log(data);
        }
    });*/

    $('#searchInput').on('input', function() {
        var q = $(this).val();
    
        // Envoyer la requête de recherche au serveur via AJAX
        $.ajax({
            url: './admin/controllers/search.php',
            type: 'POST',
            data: { q: q },
            dataType: 'json',
            success: function(data) {
                // Mettre à jour le tableau avec les résultats de la recherche
                updateTable(data);
            }
        });
    });
    
    function updateTable(data) {
        var tableBody = $('#searchResultsTable tbody');
        var error = $('.error');
        tableBody.empty();
        error.empty();
    
        
        if (data.length > 0) {
            data.forEach(function(item, index) {
                var row = `
                    <tr>
                        <td>${index + 1}</td>
                        <td>${item.nomDon}</td>
                        <td class="text-fuscha">${item.nbrB}</td>
                        <td>${item.sexe}</td>
                        <td>${item.nomRe}</td>
                        <td class="text-fuscha">${item.nbreB}</td>
                        <td>${item.sexeR}</td>
                        <td>${item.localite}</td>
                        <td>
                            <button class='edit_btn edit' data-id="${item.id}" title="Edit">Edit</button>
                            <button class='del_btn delete' data-id="${item.id}" title="Delete">Delete</button>
                        </td>
                    </tr>
                `;
        
                tableBody.append(row);
            });
        } else {
            error.append(("<h2>Aucun résultat trouvé.</h2>"));
        }
    }
    
    /*$('#searchInput').on('input', function() {
        var q = $(this).val();
        var resultsTable = $('#resultsTable'); // Remplacez "resultsTable" par l'ID de votre tableau
        resultsTable.empty(); // Effacer les anciens résultats
    
        if (q === '') {
            // Si le champ de recherche est vide, restaurer les données originales
            originalData.forEach(function(result) {
                var row = $('<tr>').append(
                    $('<td>').text(result.nbrB),
                    $('<td>').text(result.sexe),
                    $('<td>').text(result.nomRe),
                    $('<td>').text(result.nbreB),
                    $('<td>').text(result.sexeR),
                    $('<td>').text(result.localite),
                    $('<td>').html(
                        '<button class="edit_btn edit" data-id="' + result.id + '" title="Edit">Edit</button>' +
                        '<button class="del_btn delete" data-id="' + result.id + '" title="Delete">Delete</button>'
                    )
                );
                resultsTable.append(row);
            });
        } else {
            // Filtrer les données en fonction de la recherche et afficher les résultats filtrés
            var filteredData = originalData.filter(function(result) {
                // Ajoutez votre logique de filtrage ici, par exemple :
                return result.nomDon.toLowerCase().includes(q.toLowerCase());
            });
    
            filteredData.forEach(function(result) {
                var row = $('<tr>').append(
                    $('<td>').text(result.sexe),
                    $('<td>').text(result.nomRe),
                    $('<td>').text(result.nbreB),
                    $('<td>').text(result.sexeR),
                    $('<td>').text(result.localite),
                    $('<td>').html(
                        '<button class="edit_btn edit" data-id="' + result.id + '" title="Edit">Edit</button>' +
                        '<button class="del_btn delete" data-id="' + result.id + '" title="Delete">Delete</button>'
                    )
                );
                resultsTable.append(row);
            });
        }
    });*/
    
    /*$('#searchInput').on('input', function() {
        var q = $(this).val();
    
        // Envoyer la requête de recherche au serveur
        $.ajax({
            url: './admin/controllers/search.php', // Endpoint de recherche
            type: 'POST',
            data: { q: q },
            dataType: 'json',
            /*success: function(data) {
                // Construire la liste d'affichage des résultats
                var resultsList = $('#searchResults');
                resultsList.empty(); // Effacer les anciens résultats
    
                if (data.length > 0) {
                    data.forEach(function(result) {
                        var listItem = $('<li>').text(result.nomDon + ' a donné ' + result.nbreB + ' boeux à ' + result.nomRe);
                        resultsList.append(listItem);
                    });
                } else {
                    resultsList.append($('<li>').text('Aucun résultat trouvé.'));
                }
                console.log(data);

            }*/
            
            // ...

        /*success: function(data) {
            var resultsTable = $('#searchResultsTable');
            resultsTable.empty(); // Effacer les anciens résultats

            if (data.length > 0) {
                data.forEach(function(result) {
                    var row = $('<tr>').append(
                        $('<td>').text(result.nomDon),
                        $('<td>').text(result.nbreB),
                        $('<td>').text(result.sexe),
                        $('<td>').text(result.nomRe),
                        $('<td>').text(result.nbreB), // Utilisé pour le nombre de boeux reçus
                        $('<td>').text(result.sexeR),
                        $('<td>').text(result.localite),
                        $('<td>').html('<button class="edit_btn edit" data-id="' + result.id + '" title="Edit">Edit</button>' +
                                    '<button class="del_btn delete" data-id="' + result.id + '" title="Delete">Delete</button>')
                    );
                    resultsTable.append(row);
                });
            } else {
                resultsTable.append($('<tr>').append($('<td colspan="8">').text('Aucun résultat trouvé.')));
            }
        }/
//....

        });
    });
    
    $('#searchInput').on('input', function() {
        var q = $(this).val();

        // Envoyer la requête de recherche au serveur
        $.ajax({
            url: './admin/controllers/search.php', // Endpoint de recherche
            type: 'POST',
            data: { q: q },
            dataType: 'json',
            success: function(data) {
                // Mettre à jour l'interface avec les résultats
                $('#searchResults').html(data);
                console.log(data);
            }
        });
    });*/
});