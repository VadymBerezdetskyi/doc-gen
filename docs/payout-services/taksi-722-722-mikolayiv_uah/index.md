## General 
**Code:** `taksi-722-722-mikolayiv_uah`  
**Method:** `taksi-722-722-mikolayiv`  
**Currency:** `UAH` [show -->]() 
**Amount limits:** from `10`  to `500`  UAH ## Fields 
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
: [en] Caller ID  
: [uk] Номер позивного  
: [ru] Номер позывного  
Hint:  
: [en] Caller ID  
: [uk] Номер позівного  
: [ru] Номер позывного  
## JSON Object 
```json
 {"code":"taksi-722-722-mikolayiv_uah","method":"taksi-722-722-mikolayiv","currency":"UAH","fields":[{"key":"client_id","type":"string","label":{"en":"Caller ID","uk":"\u041d\u043e\u043c\u0435\u0440 \u043f\u043e\u0437\u0438\u0432\u043d\u043e\u0433\u043e","ru":"\u041d\u043e\u043c\u0435\u0440 \u043f\u043e\u0437\u044b\u0432\u043d\u043e\u0433\u043e"},"regexp":"\/^\\d{1,128}$\/","required":true,"position":1,"hint":{"en":"Caller ID","uk":"\u041d\u043e\u043c\u0435\u0440 \u043f\u043e\u0437\u0456\u0432\u043d\u043e\u0433\u043e","ru":"\u041d\u043e\u043c\u0435\u0440 \u043f\u043e\u0437\u044b\u0432\u043d\u043e\u0433\u043e"},"example":"999"}],"amount_min":10,"amount_max":500}```  
