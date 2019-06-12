## General 
**Code:** `paypal_id_cad`  
**Method:** `paypal`  
**Currency:** `CAD` [show -->]() 
**Amount limits:** from `0.01`  to `10000`  CAD ## Fields 
### Overview 
|Key|Required|Type|Regexp| 
|:---:|:---:|:---:|:---:| 
|`paypal_id` |✔ |`string` |`/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/` | 
 
### Details 
0 **`paypal_id` **  
Type: `string`  
Regexp: `/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/`  
Required: `1`  
Label:  
: [en] PayPal ID  
: [ru] PayPal ID  
: [uk] PayPal ID  
Hint:  
: [en] Enter PayPal ID  
: [ru] Введите PayPal ID  
: [uk] Введіть PayPal ID  
## JSON Object 
```json
 {"code":"paypal_id_cad","method":"paypal","currency":"CAD","fields":[{"key":"paypal_id","type":"string","label":{"en":"PayPal ID","ru":"PayPal ID","uk":"PayPal ID"},"hint":{"en":"Enter PayPal ID","ru":"\u0412\u0432\u0435\u0434\u0438\u0442\u0435 PayPal ID","uk":"\u0412\u0432\u0435\u0434\u0456\u0442\u044c PayPal ID"},"regexp":"\/^(([^<>()\\[\\]\\\\.,;:\\s@\"]+(\\.[^<>()\\[\\]\\\\.,;:\\s@\"]+)*)|(\".+\"))@((\\[[0-9]{1,3}\\.[0-9]{1,3}\\.[0-9]{1,3}\\.[0-9]{1,3}])|(([a-zA-Z\\-0-9]+\\.)+[a-zA-Z]{2,}))$\/","required":true,"position":1}],"amount_min":0.01,"amount_max":10000}```  
