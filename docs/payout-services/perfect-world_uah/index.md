## General 
**Code:** `perfect-world_uah`  
**Method:** `perfect-world`  
**Currency:** `UAH` [show -->]() 
**Amount limits:** from `7`  to `4999`  UAH ## Fields 
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
: [en] Account  
: [uk] Аккаунт  
: [ru] Аккаунт  
Hint:  
: [en] Enter account  
: [uk] Введіть аккаунт  
: [ru] Введите аккаунт  
## JSON Object 
```json
 {"code":"perfect-world_uah","method":"perfect-world","currency":"UAH","fields":[{"key":"client_id","type":"string","label":{"en":"Account","uk":"\u0410\u043a\u043a\u0430\u0443\u043d\u0442","ru":"\u0410\u043a\u043a\u0430\u0443\u043d\u0442"},"regexp":"\/^(\\w|\\.| |\\-|\\+|@){1,128}$\/","required":true,"position":1,"hint":{"en":"Enter account","uk":"\u0412\u0432\u0435\u0434\u0456\u0442\u044c \u0430\u043a\u043a\u0430\u0443\u043d\u0442","ru":"\u0412\u0432\u0435\u0434\u0438\u0442\u0435 \u0430\u043a\u043a\u0430\u0443\u043d\u0442"},"example":"marya13"}],"amount_min":7,"amount_max":4999}```  
