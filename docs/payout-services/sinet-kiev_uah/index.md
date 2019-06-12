## General 
**Code:** `sinet-kiev_uah`  
**Method:** `sinet-kiev`  
**Currency:** `UAH` [show -->]() 
**Amount limits:** from `1`  to `14999`  UAH ## Fields 
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
: [ru] Я БЫ  
Hint:  
: [en] ID  
: [uk] ID  
: [ru] Я БЫ  
## JSON Object 
```json
 {"code":"sinet-kiev_uah","method":"sinet-kiev","currency":"UAH","fields":[{"key":"client_id","type":"string","label":{"en":"ID","uk":"ID","ru":"\u042f \u0411\u042b"},"regexp":"\/^(\\w|\\.| |\\-|\\+|@){1,128}$\/","required":true,"position":1,"hint":{"en":"ID","uk":"ID","ru":"\u042f \u0411\u042b"},"example":"112"}],"amount_min":1,"amount_max":14999}```  
