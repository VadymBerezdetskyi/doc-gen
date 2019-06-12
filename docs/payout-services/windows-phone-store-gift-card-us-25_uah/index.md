## General 
**Code:** `windows-phone-store-gift-card-us-25_uah`  
**Method:** `windows-phone-store-gift-card-us-25`  
**Currency:** `UAH` [show -->]() 
**Amount limits:** from `790`  to `790`  UAH ## Fields 
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
: [en] E-mail  
: [uk] E-mail  
: [ru] E-mail  
Hint:  
: [en] Enter E-mail  
: [uk] Введіть E-mail  
: [ru] Введите E-mail  
## JSON Object 
```json
 {"code":"windows-phone-store-gift-card-us-25_uah","method":"windows-phone-store-gift-card-us-25","currency":"UAH","fields":[{"key":"client_id","type":"string","label":{"en":"E-mail","uk":"E-mail","ru":"E-mail"},"regexp":"\/^(\\w|\\.| |\\-|\\+|@){1,128}$\/","required":true,"position":1,"hint":{"en":"Enter E-mail","uk":"\u0412\u0432\u0435\u0434\u0456\u0442\u044c E-mail","ru":"\u0412\u0432\u0435\u0434\u0438\u0442\u0435 E-mail"}}],"amount_min":790,"amount_max":790}```  
