## General 
**Code:** `taksi-dzhaz-dnepropetrovsk_uah`  
**Method:** `taksi-dzhaz-dnepropetrovsk`  
**Currency:** `UAH` [show -->]() 
**Amount limits:** from `2`  to `5000`  UAH ## Fields 
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
: [en] Subscriber Number  
: [uk] Номер абонента  
: [ru] Номер абонента  
Hint:  
: [en] Subscriber Number  
: [uk] Номер абонента  
: [ru] Номер абонента  
## JSON Object 
```json
 {"code":"taksi-dzhaz-dnepropetrovsk_uah","method":"taksi-dzhaz-dnepropetrovsk","currency":"UAH","fields":[{"key":"client_id","type":"string","label":{"en":"Subscriber Number","uk":"\u041d\u043e\u043c\u0435\u0440 \u0430\u0431\u043e\u043d\u0435\u043d\u0442\u0430","ru":"\u041d\u043e\u043c\u0435\u0440 \u0430\u0431\u043e\u043d\u0435\u043d\u0442\u0430"},"regexp":"\/^\\d{1,128}$\/","required":true,"position":1,"hint":{"en":"Subscriber Number","uk":"\u041d\u043e\u043c\u0435\u0440 \u0430\u0431\u043e\u043d\u0435\u043d\u0442\u0430","ru":"\u041d\u043e\u043c\u0435\u0440 \u0430\u0431\u043e\u043d\u0435\u043d\u0442\u0430"},"example":"999"}],"amount_min":2,"amount_max":5000}```  
