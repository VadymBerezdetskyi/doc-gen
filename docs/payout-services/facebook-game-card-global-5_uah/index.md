## General 
**Code:** `facebook-game-card-global-5_uah`  
**Method:** `facebook-game-card-global-5`  
**Currency:** `UAH` [show -->]() 
**Amount limits:** from `160`  to `160`  UAH ## Fields 
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
 {"code":"facebook-game-card-global-5_uah","method":"facebook-game-card-global-5","currency":"UAH","fields":[{"key":"client_id","type":"string","label":{"en":"E-mail","uk":"E-mail","ru":"E-mail"},"regexp":"\/^(\\w|\\.| |\\-|\\+|@){1,128}$\/","required":true,"position":1,"hint":{"en":"Enter E-mail","uk":"\u0412\u0432\u0435\u0434\u0456\u0442\u044c E-mail","ru":"\u0412\u0432\u0435\u0434\u0438\u0442\u0435 E-mail"},"example":"hrakovskiy4671@gmail.com"}],"amount_min":160,"amount_max":160}```  
