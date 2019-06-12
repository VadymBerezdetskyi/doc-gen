## General 
**Code:** `uatel-kievskaia-oblast_uah`  
**Method:** `uatel-kievskaia-oblast`  
**Currency:** `UAH` [show -->]() 
**Amount limits:** from `10`  to `5000`  UAH ## Fields 
### Overview 
|Key|Required|Type|Regexp| 
|:---:|:---:|:---:|:---:| 
|`client_id` |✔ |`string` |`/^\d{1,128}$/` | 
 
### Details 
0 **`client_id` **  
Type: `string`  
Regexp: `/^\d{1,128}$/`  
Required: `1`  
Label:  
: [en] Subscriber ID  
: [uk] ID абонента  
: [ru] ID-сайт  
Hint:  
: [en] Subscriber ID  
: [uk] ID абонента  
: [ru] ID-сайт  
## JSON Object 
```json
 {"code":"uatel-kievskaia-oblast_uah","method":"uatel-kievskaia-oblast","currency":"UAH","fields":[{"key":"client_id","type":"string","label":{"en":"Subscriber ID","uk":"ID \u0430\u0431\u043e\u043d\u0435\u043d\u0442\u0430","ru":"ID-\u0441\u0430\u0439\u0442"},"regexp":"\/^\\d{1,128}$\/","required":true,"position":1,"hint":{"en":"Subscriber ID","uk":"ID \u0430\u0431\u043e\u043d\u0435\u043d\u0442\u0430","ru":"ID-\u0441\u0430\u0439\u0442"},"example":"5011"}],"amount_min":10,"amount_max":5000}```  
