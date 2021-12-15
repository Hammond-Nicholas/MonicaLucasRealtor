/* API rules
 * broker_instance needs to be defined
 * agent_user_id needs to be defined
 * html text input must be named cityOrPostal, the ID doesn't matter
*/

// Broker & Agent info
var broker_instance = "hsaz001";
var agent_user_id = "99707";
var agent_id = "50651";

$(document).ready(function($){
    // First form for header
    // OnClick
    $('#searchButton').click(function () {
        if (document.getElementById('cityOrPostal').value.length == 0) {
            // If input box is empty
            window.location.href = 'https://homesmart.com//find/' + broker_instance + 
                '&redirect=1&referrer_aid=' + agent_user_id;
        } else {
            // Send search to HomeSmart
            window.location.href = 'https://homesmart.com//find/' + broker_instance + '?serialized=' + encodeURIComponent($('#searchForm').serialize()) + 
                '&redirect=1&referrer_aid=' + agent_user_id;
        }

        return false;
    });

    // Second form for contact page
    // OnClick
    $('#searchButton2').click(function () {
        if (document.getElementById('cityOrPostal2').value.length == 0) {
            // If input box is empty
            window.location.href = 'https://homesmart.com//find/' + broker_instance + 
                '&redirect=1&referrer_aid=' + agent_user_id;
        } else {
            // Send search to HomeSmart
            window.location.href = 'https://homesmart.com//find/' + broker_instance + '?serialized=' + encodeURIComponent($('#searchForm2').serialize()) + 
                '&redirect=1&referrer_aid=' + agent_user_id;
        }

        return false;
    });
});