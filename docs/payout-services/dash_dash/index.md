## General 
**Code:** `dash_dash`  
**Method:** `dash`  
**Currency:** `DASH` [show -->]() 
**Amount limits:** from `0.01`  to `10000`  DASH ## Fields 
### Overview 
|Key|Required|Type|Regexp| 
|:---:|:---:|:---:|:---:| 
|`wallet_id` |✔ |`string` |`/^[A-Za-z0-9]{32,34}$/` | 
 
### Details 
0 **`wallet_id` **  
Type: `string`  
Regexp: `/^[A-Za-z0-9]{32,34}$/`  
Required: `1`  
Label:  
: [en] Wallet address  
: [ru] Номер кошелька  
: [uk] Номер гаманця  
Hint:  
: [en] Enter wallet address  
: [ru] Введите номер кошелька  
: [uk] Введіть номер гаманця  
## JSON Object 
```json
 {"code":"dash_dash","method":"dash","currency":"DASH","fields":[{"key":"wallet_id","type":"string","label":{"en":"Wallet address","ru":"\u041d\u043e\u043c\u0435\u0440 \u043a\u043e\u0448\u0435\u043b\u044c\u043a\u0430","uk":"\u041d\u043e\u043c\u0435\u0440 \u0433\u0430\u043c\u0430\u043d\u0446\u044f"},"hint":{"en":"Enter wallet address","ru":"\u0412\u0432\u0435\u0434\u0438\u0442\u0435 \u043d\u043e\u043c\u0435\u0440 \u043a\u043e\u0448\u0435\u043b\u044c\u043a\u0430","uk":"\u0412\u0432\u0435\u0434\u0456\u0442\u044c \u043d\u043e\u043c\u0435\u0440 \u0433\u0430\u043c\u0430\u043d\u0446\u044f"},"regexp":"\/^[A-Za-z0-9]{32,34}$\/","required":true,"position":1}],"amount_min":0.01,"amount_max":10000}```  
