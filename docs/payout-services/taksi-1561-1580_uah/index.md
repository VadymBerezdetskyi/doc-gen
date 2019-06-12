## General 
**Code:** `taksi-1561-1580_uah`  
**Method:** `taksi-1561-1580`  
**Currency:** `UAH` [show -->]() 
**Amount limits:** from `5`  to `5000`  UAH ## Fields 
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
: [en] Call sign number  
: [uk] Номер позивного  
: [ru] Номер позывного  
Hint:  
: [en] Enter call sign number  
: [uk] Введіть номер позивного  
: [ru] Введите номер позывного  
## JSON Object 
```json
 {"code":"taksi-1561-1580_uah","method":"taksi-1561-1580","currency":"UAH","fields":[{"key":"client_id","type":"string","label":{"en":"Call sign number","uk":"\u041d\u043e\u043c\u0435\u0440 \u043f\u043e\u0437\u0438\u0432\u043d\u043e\u0433\u043e","ru":"\u041d\u043e\u043c\u0435\u0440 \u043f\u043e\u0437\u044b\u0432\u043d\u043e\u0433\u043e"},"regexp":"\/^\\d{1,128}$\/","required":true,"position":1,"hint":{"en":"Enter call sign number","uk":"\u0412\u0432\u0435\u0434\u0456\u0442\u044c \u043d\u043e\u043c\u0435\u0440 \u043f\u043e\u0437\u0438\u0432\u043d\u043e\u0433\u043e","ru":"\u0412\u0432\u0435\u0434\u0438\u0442\u0435 \u043d\u043e\u043c\u0435\u0440 \u043f\u043e\u0437\u044b\u0432\u043d\u043e\u0433\u043e"},"example":"999"}],"amount_min":5,"amount_max":5000}```  
