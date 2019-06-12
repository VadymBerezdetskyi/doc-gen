## General 
**Code:** `taksi-idealnoe-994-odessa_uah`  
**Method:** `taksi-idealnoe-994-odessa`  
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
: [en] Caller  
: [uk] Позівній  
: [ru] Позывной  
Hint:  
: [en] Enter Caller  
: [uk] Введіть позівній  
: [ru] Введите позывной  
## JSON Object 
```json
 {"code":"taksi-idealnoe-994-odessa_uah","method":"taksi-idealnoe-994-odessa","currency":"UAH","fields":[{"key":"client_id","type":"string","label":{"en":"Caller","uk":"\u041f\u043e\u0437\u0456\u0432\u043d\u0456\u0439","ru":"\u041f\u043e\u0437\u044b\u0432\u043d\u043e\u0439"},"regexp":"\/^\\d{1,128}$\/","required":true,"position":1,"hint":{"en":"Enter Caller","uk":"\u0412\u0432\u0435\u0434\u0456\u0442\u044c \u043f\u043e\u0437\u0456\u0432\u043d\u0456\u0439","ru":"\u0412\u0432\u0435\u0434\u0438\u0442\u0435 \u043f\u043e\u0437\u044b\u0432\u043d\u043e\u0439"},"example":"2000"}],"amount_min":2,"amount_max":14999}```  
