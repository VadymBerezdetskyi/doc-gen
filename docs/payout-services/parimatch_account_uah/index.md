## General 
**Code:** `parimatch_account_uah`  
**Method:** `parimatch_account`  
**Currency:** `UAH` [show -->]() 
**Amount limits:** from `1`  to `14900`  UAH ## Fields 
### Overview 
|Key|Required|Type|Regexp| 
|:---:|:---:|:---:|:---:| 
|`account_id` |✔ |`string` |`/^\d{7}$/` | 
 
### Details 
0 **`account_id` **  
Type: `string`  
Regexp: `/^\d{7}$/`  
Required: `1`  
Label:  
: [en] Account Number  
: [ru] Номер аккаунта  
: [uk] Номер аккаунта  
Hint:  
: [en] Enter account Number  
: [ru] Введите номер аккаунта  
: [uk] Введіть номер аккаунта  
## JSON Object 
```json
 {"code":"parimatch_account_uah","method":"parimatch_account","currency":"UAH","fields":[{"key":"account_id","type":"string","label":{"en":"Account Number","ru":"\u041d\u043e\u043c\u0435\u0440 \u0430\u043a\u043a\u0430\u0443\u043d\u0442\u0430","uk":"\u041d\u043e\u043c\u0435\u0440 \u0430\u043a\u043a\u0430\u0443\u043d\u0442\u0430"},"hint":{"en":"Enter account Number","ru":"\u0412\u0432\u0435\u0434\u0438\u0442\u0435 \u043d\u043e\u043c\u0435\u0440 \u0430\u043a\u043a\u0430\u0443\u043d\u0442\u0430","uk":"\u0412\u0432\u0435\u0434\u0456\u0442\u044c \u043d\u043e\u043c\u0435\u0440 \u0430\u043a\u043a\u0430\u0443\u043d\u0442\u0430"},"regexp":"\/^\\d{7}$\/","required":true,"position":1}],"amount_min":1,"amount_max":14900}```  
