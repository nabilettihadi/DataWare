function showUpdateForm() {
    $("#updateForm").show();
    $("#deleteForm").hide();
    $("#insertForm").hide();
}

function showDeleteForm() {
    $("#deleteForm").show();
    $("#updateForm").hide();
    $("#insertForm").hide();
}

function showInsertForm() {
    $("#insertForm").show();
    $("#updateForm").hide();
    $("#deleteForm").hide();
}

function displayData() {
    $.ajax({
        method: "GET",
        url: "display_data.php",
        success: function (response) {
            $("#result").html(response);
        },
        error: function (error) {
            console.error("Erreur lors de l'affichage des données:", error);
        }
    });
}

function updateData() {
    var memberId = $("#updateId").val();
    var newEmail = $("#newEmail").val();

    $.ajax({
        method: "POST",
        url: "update_data.php",
        data: { id: memberId, email: newEmail },
        success: function (response) {
            alert(response);
            displayData();
        },
        error: function (error) {
            console.error("Erreur lors de la mise à jour:", error);
        }
    });
}

function deleteData() {
    var memberId = $("#deleteId").val();

    $.ajax({
        method: "POST",
        url: "delete_data.php",
        data: { id: memberId },
        success: function (response) {
            alert(response);
            displayData();
        },
        error: function (error) {
            console.error("Erreur lors de la suppression:", error);
        }
    });
}

function insertData() {
    var newData = {
        nom: $("#nom").val(),
        prenom: $("#prenom").val(),
        email: $("#email").val(),
        telephone: $("#telephone").val(),
        role: $("#role").val(),
        equipe: $("#equipe").val(),
        statut: $("#statut").val()
    };

    $.ajax({
        method: "POST",
        url: "insert_data.php",
        data: newData,
        success: function (response) {
            alert(response);
            displayData();
        },
        error: function (error) {
            console.error("Erreur lors de l'ajout:", error);
        }
    });
}