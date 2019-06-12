## General 
**Code:** `expres-net-zakarpatskaia-obl_uah`  
**Method:** `expres-net-zakarpatskaia-obl`  
**Currency:** `UAH` [show -->]() 
**Amount limits:** from `1`  to `14999`  UAH ## Fields 
### Overview 
|Key|Required|Type|Regexp| 
|:---:|:---:|:---:|:---:| 
|`client_id` |✔ |`string` |`/^\d{1,128}$/` | 
 
### Details 
0 **`client_id` **  
Type: `string`  
Regexp: `/^\d{1,128}$/`  
Required: `1`  
Label:  
: [en] Special Rahunok  
: [uk] Приватний рахунок  
: [ru] Особовий рахунок  
Hint:  
: [en] Special Rahunok  
: [uk] Приватний рахунок  
: [ru] Особовий рахунок  
## JSON Object 
```json
 {"code":"expres-net-zakarpatskaia-obl_uah","method":"expres-net-zakarpatskaia-obl","currency":"UAH","fields":[{"key":"client_id","type":"string","label":{"en":"Special Rahunok","uk":"\u041f\u0440\u0438\u0432\u0430\u0442\u043d\u0438\u0439 \u0440\u0430\u0445\u0443\u043d\u043e\u043a","ru":"\u041e\u0441\u043e\u0431\u043e\u0432\u0438\u0439 \u0440\u0430\u0445\u0443\u043d\u043e\u043a"},"regexp":"\/^\\d{1,128}$\/","required":true,"position":1,"hint":{"en":"Special Rahunok","uk":"\u041f\u0440\u0438\u0432\u0430\u0442\u043d\u0438\u0439 \u0440\u0430\u0445\u0443\u043d\u043e\u043a","ru":"\u041e\u0441\u043e\u0431\u043e\u0432\u0438\u0439 \u0440\u0430\u0445\u0443\u043d\u043e\u043a"},"example":"10039"}],"amount_min":1,"amount_max":14999}```  
