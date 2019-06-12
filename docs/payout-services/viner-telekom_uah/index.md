## General 
**Code:** `viner-telekom_uah`  
**Method:** `viner-telekom`  
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
: [en] PIN  
: [uk] ПІН  
: [ru] ПИН  
Hint:  
: [en] Enter PIN  
: [uk] Введіть ПІН  
: [ru] Введите ПИН  
## JSON Object 
```json
 {"code":"viner-telekom_uah","method":"viner-telekom","currency":"UAH","fields":[{"key":"client_id","type":"string","label":{"en":"PIN","uk":"\u041f\u0406\u041d","ru":"\u041f\u0418\u041d"},"regexp":"\/^\\d{1,128}$\/","required":true,"position":1,"hint":{"en":"Enter PIN","uk":"\u0412\u0432\u0435\u0434\u0456\u0442\u044c \u041f\u0406\u041d","ru":"\u0412\u0432\u0435\u0434\u0438\u0442\u0435 \u041f\u0418\u041d"},"example":"1234567899"}],"amount_min":2,"amount_max":14999}```  
