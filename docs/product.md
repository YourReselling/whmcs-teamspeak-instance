# TeamSpeak Instanz

Bestellung: `POST /products/teamspeak/instances/create`. ID: `data.id`.

Kundenfelder: `name`.

| Feld | Typ | Pflicht | Hinweis |
|---|---|---|---|
| `name` | string | Ja | Instance name (max 255 characters) |

API-Key-Rechte für alle Modulansichten und Aktionen: `teamspeak:create`, `teamspeak:delete`, `teamspeak:power`, `teamspeak:read`, `teamspeak:update`.

Verwaltungsaktionen: Starten, Stoppen, Whitelist ergänzen, Whitelist entfernen.

Hinweise:
- No suspend/unsuspend endpoint; stop/start are power operations
