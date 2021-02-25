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
        "start_url": start_url+"/"+name,
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

// Test this by running the code snippet below and then
// use the "Offline" checkbox in DevTools Network panel

window.addEventListener('online', handleConnection);
window.addEventListener('offline', handleConnection);

function handleConnection() {
  if (navigator.onLine) {
    isReachable(getServerUrl()).then(function(online) {
      if (online) {
        // handle online status
        console.log('online');
      } else {
        console.log('no connectivity');
      }
    });
  } else {
    // handle offline status
    console.log('offline');
  }
}

function isReachable(url) {
  /**
   * Note: fetch() still "succeeds" for 404s on subdirectories,
   * which is ok when only testing for domain reachability.
   *
   * Example:
   *   https://google.com/noexist does not throw
   *   https://noexist.com/noexist does throw
   */
  return fetch(url, { method: 'HEAD', mode: 'no-cors' })
    .then(function(resp) {
      return resp && (resp.ok || resp.type === 'opaque');
    })
    .catch(function(err) {
      console.warn('[conn test failure]:', err);
    });
}

function getServerUrl() {
  return document.getElementById('serverUrl').value || window.location.origin;
}

