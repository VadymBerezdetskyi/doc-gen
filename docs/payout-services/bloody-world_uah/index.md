## General 
**Code:** `bloody-world_uah`  
**Method:** `bloody-world`  
**Currency:** `UAH` [show -->]() 
**Amount limits:** from `20`  to `4999`  UAH ## Fields 
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
 {"code":"bloody-world_uah","method":"bloody-world","currency":"UAH","fields":[{"key":"client_id","type":"string","label":{"en":"Account","uk":"\u0410\u043a\u043a\u0430\u0443\u043d\u0442","ru":"\u0410\u043a\u043a\u0430\u0443\u043d\u0442"},"regexp":"\/^(\\w|\\.| |\\-|\\+|@){1,128}$\/","required":true,"position":1,"hint":{"en":"Enter account","uk":"\u0412\u0432\u0435\u0434\u0456\u0442\u044c \u0430\u043a\u043a\u0430\u0443\u043d\u0442","ru":"\u0412\u0432\u0435\u0434\u0438\u0442\u0435 \u0430\u043a\u043a\u0430\u0443\u043d\u0442"},"example":"francuz13"}],"amount_min":20,"amount_max":4999}```  
