## General 
**Code:** `voina-angely-i-demony_uah`  
**Method:** `voina-angely-i-demony`  
**Currency:** `UAH` [show -->]() 
**Amount limits:** from `1`  to `4999`  UAH ## Fields 
### Overview 
|Key|Required|Type|Regexp| 
|:---:|:---:|:---:|:---:| 
|`client_id` |✔ |`string` |`/^(\w|\.| |\-|\+|@){1,128}$/` | 
 
### Details 
0 **`client_id` **  
Type: `string`  
Regexp: `/^(\w|\.| |\-|\+|@){1,128}$/`  
Required: `1`  
Label:  
: [en] ID  
: [uk] ID  
: [ru] ID  
Hint:  
: [en] Enter ID  
: [uk] Введіть ID  
: [ru] Введите ID  
## JSON Object 
```json
 {"code":"voina-angely-i-demony_uah","method":"voina-angely-i-demony","currency":"UAH","fields":[{"key":"client_id","type":"string","label":{"en":"ID","uk":"ID","ru":"ID"},"regexp":"\/^(\\w|\\.| |\\-|\\+|@){1,128}$\/","required":true,"position":1,"hint":{"en":"Enter ID","uk":"\u0412\u0432\u0435\u0434\u0456\u0442\u044c ID","ru":"\u0412\u0432\u0435\u0434\u0438\u0442\u0435 ID"},"example":"867342"}],"amount_min":1,"amount_max":4999}```  
