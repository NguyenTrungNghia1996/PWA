function manifest(short_name, name, description, icon_192, icon_512, scope, start_url) {
    return {
        "$schema": "http://json.schemastore.org/web-manifest",
        "short_name": "Tin Tuc "+short_name,
        "name": "App Tin Tuc "+name,
        "description": description,
        "scope": scope+"/"+name,
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
        "start_url": start_url+"/?utm_source=app&utm_medium="+name,
        "display": "standalone",
        "orientation": "any",
        "shortcut_item": {
            "type": "object",
            "description": "A shortcut item represents a link to a key task or page within a web app. A user agent can use these values to assemble a context menu to be displayed by the operating system when a user engages with the web app's icon.",
            "properties": {
                "name": {
                    "description": "The name member of a shortcut item is a string that represents the name of the shortcut as it is usually displayed to the user in a context menu.",
                    "type": "string"
                },
                "short_name": {
                    "description": "The short_name member of a shortcut item is a string that represents a short version of the name of the shortcut. It is intended to be used where there is insufficient space to display the full name of the shortcut.",
                    "type": "string"
                },
                "description": {
                    "description": "The description member of a shortcut item is a string that allows the developer to describe the purpose of the shortcut.",
                    "type": "string"
                },
                "url": {
                    "description": "The url member of a shortcut item is a URL within scope of a processed manifest that opens when the associated shortcut is activated.",
                    "type": "string"
                },
                "icons": {
                    "description": "The icons member of a shortcut item serves as iconic representations of the shortcut in various contexts.",
                    "type": "array",
                    "items": {
                        "$ref": "#/definitions/manifest_image_resource"
                    }
                }
            },
            "required": [
                "name",
                "url"
            ]
        }
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
    let local = response.region;
    const stringManifest = JSON.stringify(manifest(local, local, "description_test", "manifest-icon-192.png", "manifest-icon-512.png", "https://atdsf.herokuapp.com", "https://atdsf.herokuapp.com"));
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

if ('serviceWorker' in navigator) {
    navigator.serviceWorker.register('/service-worker.js');
}
let deferredPrompt;
window.addEventListener('beforeinstallprompt', (e) => {
    e.preventDefault();
    deferredPrompt = e;
});
let img = document.getElementById("myImg");
img.onclick = function(){
    deferredPrompt.prompt();
    deferredPrompt.userChoice.then((choiceResult) => {
        if (choiceResult.outcome === 'accepted') {
            alert('thanh cong')
        }else {
            deferredPrompt = null;
            alert('no')
        }

    });
}
// myImg.addEventListener('click', (e) => {
//
// });
window.addEventListener('appinstalled', (evt) => {
    app.logEvent('a2hs', 'installed');
});
