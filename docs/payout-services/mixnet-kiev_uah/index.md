## General 
**Code:** `mixnet-kiev_uah`  
**Method:** `mixnet-kiev`  
**Currency:** `UAH` [show -->]() 
**Amount limits:** from `2`  to `14999`  UAH ## Fields 
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
: [ru] ID абонента  
Hint:  
: [en] Enter subscriber ID  
: [uk] Введіть ID абонента  
: [ru] Введите ID абонента  
## JSON Object 
```json
 {"code":"mixnet-kiev_uah","method":"mixnet-kiev","currency":"UAH","fields":[{"key":"client_id","type":"string","label":{"en":"Subscriber ID","uk":"ID \u0430\u0431\u043e\u043d\u0435\u043d\u0442\u0430","ru":"ID \u0430\u0431\u043e\u043d\u0435\u043d\u0442\u0430"},"regexp":"\/^\\d{1,128}$\/","required":true,"position":1,"hint":{"en":"Enter subscriber ID","uk":"\u0412\u0432\u0435\u0434\u0456\u0442\u044c ID \u0430\u0431\u043e\u043d\u0435\u043d\u0442\u0430","ru":"\u0412\u0432\u0435\u0434\u0438\u0442\u0435 ID \u0430\u0431\u043e\u043d\u0435\u043d\u0442\u0430"},"example":"1425081"}],"amount_min":2,"amount_max":14999}```  
