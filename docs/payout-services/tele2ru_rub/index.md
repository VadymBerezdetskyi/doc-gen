## General 
**Code:** `tele2ru_rub`  
**Method:** `tele2ru`  
**Currency:** `RUB` [show -->]() 
**Amount limits:** from `1`  to `15000`  RUB ## Fields 
### Overview 
|Key|Required|Type|Regexp| 
|:---:|:---:|:---:|:---:| 
|`phone_number` |✔ |`string` |`/^[\+]{1}[7]{1}[9]{1}[\d]{9}$/` | 
 
### Details 
0 **`phone_number` **  
Type: `string`  
Regexp: `/^[\+]{1}[7]{1}[9]{1}[\d]{9}$/`  
Required: `1`  
Label:  
: [en] Phone number  
: [ru] Номер телефона  
: [uk] Номер телефону  
Hint:  
: [en] Enter phone number  
: [ru] Введите номер телефона  
: [uk] Введіть номер телефону  
## JSON Object 
```json
 {"code":"tele2ru_rub","method":"tele2ru","currency":"RUB","fields":[{"key":"phone_number","type":"string","label":{"en":"Phone number","ru":"\u041d\u043e\u043c\u0435\u0440 \u0442\u0435\u043b\u0435\u0444\u043e\u043d\u0430","uk":"\u041d\u043e\u043c\u0435\u0440 \u0442\u0435\u043b\u0435\u0444\u043e\u043d\u0443"},"hint":{"en":"Enter phone number","ru":"\u0412\u0432\u0435\u0434\u0438\u0442\u0435 \u043d\u043e\u043c\u0435\u0440 \u0442\u0435\u043b\u0435\u0444\u043e\u043d\u0430","uk":"\u0412\u0432\u0435\u0434\u0456\u0442\u044c \u043d\u043e\u043c\u0435\u0440 \u0442\u0435\u043b\u0435\u0444\u043e\u043d\u0443"},"regexp":"\/^[\\+]{1}[7]{1}[9]{1}[\\d]{9}$\/","required":true,"position":1}],"amount_min":1,"amount_max":15000}```  
