## General 
**Code:** `maksi-taksi-sumy_uah`  
**Method:** `maksi-taksi-sumy`  
**Currency:** `UAH` [show -->]() 
**Amount limits:** from `1`  to `5000`  UAH ## Fields 
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
: [uk] Номер позивного  
: [ru] Номер позывного  
## JSON Object 
```json
 {"code":"maksi-taksi-sumy_uah","method":"maksi-taksi-sumy","currency":"UAH","fields":[{"key":"client_id","type":"string","label":{"en":"Caller ID","uk":"\u041d\u043e\u043c\u0435\u0440 \u043f\u043e\u0437\u0438\u0432\u043d\u043e\u0433\u043e","ru":"\u041d\u043e\u043c\u0435\u0440 \u043f\u043e\u0437\u044b\u0432\u043d\u043e\u0433\u043e"},"regexp":"\/^\\d{1,128}$\/","required":true,"position":1,"hint":{"en":"Caller ID","uk":"\u041d\u043e\u043c\u0435\u0440 \u043f\u043e\u0437\u0438\u0432\u043d\u043e\u0433\u043e","ru":"\u041d\u043e\u043c\u0435\u0440 \u043f\u043e\u0437\u044b\u0432\u043d\u043e\u0433\u043e"},"example":"888"}],"amount_min":1,"amount_max":5000}```  
