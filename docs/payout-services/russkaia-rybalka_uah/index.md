## General 
**Code:** `russkaia-rybalka_uah`  
**Method:** `russkaia-rybalka`  
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
: [en] Account number  
: [uk] Номер аккаунта  
: [ru] Номер аккаунта  
Hint:  
: [en] Enter account number  
: [uk] Введіть номер аккаунта  
: [ru] Введите номер аккаунта  
## JSON Object 
```json
 {"code":"russkaia-rybalka_uah","method":"russkaia-rybalka","currency":"UAH","fields":[{"key":"client_id","type":"string","label":{"en":"Account number","uk":"\u041d\u043e\u043c\u0435\u0440 \u0430\u043a\u043a\u0430\u0443\u043d\u0442\u0430","ru":"\u041d\u043e\u043c\u0435\u0440 \u0430\u043a\u043a\u0430\u0443\u043d\u0442\u0430"},"regexp":"\/^(\\w|\\.| |\\-|\\+|@){1,128}$\/","required":true,"position":1,"hint":{"en":"Enter account number","uk":"\u0412\u0432\u0435\u0434\u0456\u0442\u044c \u043d\u043e\u043c\u0435\u0440 \u0430\u043a\u043a\u0430\u0443\u043d\u0442\u0430","ru":"\u0412\u0432\u0435\u0434\u0438\u0442\u0435 \u043d\u043e\u043c\u0435\u0440 \u0430\u043a\u043a\u0430\u0443\u043d\u0442\u0430"},"example":"2579243"}],"amount_min":1,"amount_max":4999}```  
