## General 
**Code:** `promsvyaz_bank_rub`  
**Method:** `promsvyaz_bank`  
**Currency:** `RUB` [show -->]() 
**Amount limits:** from `100`  to `75000`  RUB ## Fields 
### Overview 
|Key|Required|Type|Regexp| 
|:---:|:---:|:---:|:---:| 
|`card_number` |✔ |`string` |`/^([45]{1}[\d]{15}|[6]{1}[\d]{17})$/` | 
 
### Details 
0 **`card_number` **  
Type: `string`  
Regexp: `/^([45]{1}[\d]{15}|[6]{1}[\d]{17})$/`  
Required: `1`  
Label:  
: [en] Card number  
: [ru] Номер карты  
: [uk] Номер картки  
Hint:  
: [en] Enter card number  
: [ru] Введите номер карты  
: [uk] Введіть номер картки  
## JSON Object 
```json
 {"code":"promsvyaz_bank_rub","method":"promsvyaz_bank","currency":"RUB","fields":[{"key":"card_number","type":"string","label":{"en":"Card number","ru":"\u041d\u043e\u043c\u0435\u0440 \u043a\u0430\u0440\u0442\u044b","uk":"\u041d\u043e\u043c\u0435\u0440 \u043a\u0430\u0440\u0442\u043a\u0438"},"hint":{"en":"Enter card number","ru":"\u0412\u0432\u0435\u0434\u0438\u0442\u0435 \u043d\u043e\u043c\u0435\u0440 \u043a\u0430\u0440\u0442\u044b","uk":"\u0412\u0432\u0435\u0434\u0456\u0442\u044c \u043d\u043e\u043c\u0435\u0440 \u043a\u0430\u0440\u0442\u043a\u0438"},"regexp":"\/^([45]{1}[\\d]{15}|[6]{1}[\\d]{17})$\/","required":true,"position":1}],"amount_min":100,"amount_max":75000}```  
