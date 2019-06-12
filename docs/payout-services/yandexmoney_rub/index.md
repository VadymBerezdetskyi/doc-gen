## General 
**Code:** `yandexmoney_rub`  
**Method:** `yandexmoney`  
**Currency:** `RUB` [show -->]() 
**Amount limits:** from `4`  to `15000`  RUB ## Fields 
### Overview 
|Key|Required|Type|Regexp| 
|:---:|:---:|:---:|:---:| 
|`card_number` |✔ |`string` |`/^41001[0-9]{7,11}$/` | 
 
### Details 
0 **`card_number` **  
Type: `string`  
Regexp: `/^41001[0-9]{7,11}$/`  
Required: `1`  
Label:  
: [en] Account number  
: [ru] Номер счёта  
: [uk] Номер рахунку  
Hint:  
: [en] Enter account number  
: [ru] Введите номер счёта  
: [uk] Введіть номер рахунку  
## JSON Object 
```json
 {"code":"yandexmoney_rub","method":"yandexmoney","currency":"RUB","fields":[{"key":"card_number","type":"string","label":{"en":"Account number","ru":"\u041d\u043e\u043c\u0435\u0440 \u0441\u0447\u0451\u0442\u0430","uk":"\u041d\u043e\u043c\u0435\u0440 \u0440\u0430\u0445\u0443\u043d\u043a\u0443"},"hint":{"en":"Enter account number","ru":"\u0412\u0432\u0435\u0434\u0438\u0442\u0435 \u043d\u043e\u043c\u0435\u0440 \u0441\u0447\u0451\u0442\u0430","uk":"\u0412\u0432\u0435\u0434\u0456\u0442\u044c \u043d\u043e\u043c\u0435\u0440 \u0440\u0430\u0445\u0443\u043d\u043a\u0443"},"regexp":"\/^41001[0-9]{7,11}$\/","required":true,"position":1}],"amount_min":4,"amount_max":15000}```  
