function redirectToClientList() {
    window.location.href = window.location.href.replace(/\?.*$/, '') + '?action=viewClientList';
}

function redirectToContractList() {
    window.location.href = window.location.href.replace(/\?.*$/, '') + '?action=viewContractList';
}

function redirectToAccountList() {
    window.location.href = window.location.href.replace(/\?.*$/, '') + '?action=viewAccountList';
}



