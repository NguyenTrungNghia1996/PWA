function manifest(short_name, name, description, icon_192, icon_512, scope, start_url) {
    return {
        "$schema": "http://json.schemastore.org/web-manifest",
        "short_name": "Tin Tuc "+short_name,
        "name": "App Tin Tuc "+name,
        "description": description,
        "scope": scope,
        "icons": [
            {
                "src": scope + "/icon/" + icon_192,
                "sizes": "192x192",
                "type": "image/png",
                "purpose": "maskable any"
            },
            {
                "src": scope + "/icon/" + icon_512,
                "sizes": "512x512",
                "type": "image/png",
                "purpose": "maskable any"
            }
        ],
        "background_color": "#c15252",
        "theme_color": "#556f91",
        "start_url": start_url,
        "display": "standalone",
        "orientation": "any"
    };
}

// if(navigator.userAgent.match(/Android/i)){
//  alert("Android")
// }



// if(navigator.userAgent.match(/BlackBerry/i)){
//  //code for BlackBerry here
// }


// if(navigator.userAgent.match(/win32/i)){
//     alert("Window")
// }
// var os =navigator.userAgent;
// alert(os);
// $ip.getJSON('https://ipgeolocation.abstractapi.com/v1/?api_key=1ffc5606a00342708e33458fd1b48e8d', function(data) {
//     console.log(JSON.stringify(data, null, 2));
//     });
$.get("https://ipinfo.io/json", function (response) {
    local = response.region;
    const stringManifest = JSON.stringify(manifest(local, local, "description_test", "manifest-icon-192.png", "manifest-icon-512.png", "https://atdsf.herokuapp.com", "https://atdsf.herokuapp.com/hn.html"));
    //const stringManifest = JSON.stringify(myDynamicManifest);
    const blob = new Blob([stringManifest], {type: 'application/json'});
    const manifestURL = URL.createObjectURL(blob);
    document.querySelector('#my-manifest-placeholder').setAttribute('href', manifestURL);
    $("#ip").html("IP: " + response.ip);
    $("#address").html("Location: " + response.city + ", " + response.region);
    $("#details").html(JSON.stringify(response, null, 4));
}, "jsonp");

// const stringManifest = JSON.stringify(manifest(local, local, "description_test", "manifest-icon-192.png", "manifest-icon-512.png", "https://atdsf.herokuapp.com", "https://atdsf.herokuapp.com/hn.html"));
// //const stringManifest = JSON.stringify(myDynamicManifest);
// const blob = new Blob([stringManifest], {type: 'application/json'});
// const manifestURL = URL.createObjectURL(blob);
// document.querySelector('#my-manifest-placeholder').setAttribute('href', manifestURL);
// window.navigator.geolocation.getCurrentPosition(console.log)
