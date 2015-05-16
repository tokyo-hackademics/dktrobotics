redirectUri="file:///home/kendemu/workspace/tokyo-hackademics/dktrobotics/web-platform/index.html";

WL.init({
    client_id:'000000004C150DA6',
    redirect_uri: redirectUri
});

WL.ui({
    name: "skydrivepicker",
    element: "downloadFile_div",
    mode: "open",
    select: "multi",
    onselected: onDownloadFileCompleted,
    onerror: onDownloadFileError
});


$(document).ready(function(){

});

function onDownloadFileCompleted(response) {
    var msg = "";
    // For each folder selected...
    if (response.data.folders.length > 0) {
        for (folder = 0; folder < response.data.folders.length; folder++) {
            // Use folder IDs to iterate through child folders and files as needed.
            msg += "\n" + response.data.folders[folder].id;
        }
    }
    // For each file selected...
    if (response.data.files.length > 0) {
        for (file = 0; file < response.data.files.length; file++) {
            // Use file IDs to iterate through files as needed.
            msg += "\n" + response.data.files[file].id;
        }
    }
    document.getElementById("info").innerText =
        "Selected folders/files:" + msg;
};

function onDownloadFileError(responseFailed) {
    document.getElementById("info").innerText =
        "Error getting folder/file info: " + responseFailed.error.message;
}


