## General 
**Code:** `ufo-online_uah`  
**Method:** `ufo-online`  
**Currency:** `UAH` [show -->]() 
**Amount limits:** from `25`  to `4999`  UAH ## Fields 
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
: [en] An account  
: [uk] Аккаунт  
: [ru] Аккаунт  
Hint:  
: [en] Enter an account  
: [uk] Введіть аккаунт  
: [ru] Введите аккаунт  
## JSON Object 
```json
 {"code":"ufo-online_uah","method":"ufo-online","currency":"UAH","fields":[{"key":"client_id","type":"string","label":{"en":"An account","uk":"\u0410\u043a\u043a\u0430\u0443\u043d\u0442","ru":"\u0410\u043a\u043a\u0430\u0443\u043d\u0442"},"regexp":"\/^(\\w|\\.| |\\-|\\+|@){1,128}$\/","required":true,"position":1,"hint":{"en":"Enter an account","uk":"\u0412\u0432\u0435\u0434\u0456\u0442\u044c \u0430\u043a\u043a\u0430\u0443\u043d\u0442","ru":"\u0412\u0432\u0435\u0434\u0438\u0442\u0435 \u0430\u043a\u043a\u0430\u0443\u043d\u0442"},"example":"Worm"}],"amount_min":25,"amount_max":4999}```  
