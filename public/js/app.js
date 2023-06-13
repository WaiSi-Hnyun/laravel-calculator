document.getElementById('calcForm').addEventListener('submit', function(e) {
    let operator = e.submitter.value;

    let route;

    switch(operator) {
        case 'add':
            route = '/add';
            break;
        case 'multiply':
            route = '/multiply';
            break;
        case 'divide':
            route = '/divide';
            break;
        default:
            route = '/'
            break;
    }

    this.setAttribute('action', route);
})
