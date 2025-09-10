# Lista de Tareas para Implementar CRUD

Aquí están los pasos para añadir la funcionalidad de Crear, Actualizar y Borrar (CRUD) a la aplicación de facturas.

### Paso 0: Centralizar los Datos

- [ ] En `main.php`, cambiar las variables de factura individuales (`$factura1`, `$factura2`, etc.) por un único array llamado `$todasLasFacturas`.
  ```php
  $todasLasFacturas = [
      new FacturaLuz(1, '2023-01-15', 350),
      new FacturaGas(2, '2023-01-20', 25),
      // ... y así con todas
  ];
  ```

---

### 1. CREATE (Añadir Factura)

- [ ] Añadir la opción `"Añadir Factura"` al array `$opcionesMenu`.
- [ ] Crear un nuevo `case` en el `switch` de `main.php`.
- [ ] Dentro del `case`, usar `readline()` para pedir al usuario el tipo de factura, la fecha y el consumo.
- [ ] Generar un nuevo ID único para la factura.
- [ ] Crear el nuevo objeto `FacturaLuz` o `FacturaGas`.
- [ ] Añadir el nuevo objeto al array `$todasLasFacturas`.

---

### 2. UPDATE (Modificar Factura)

- [ ] Añadir la opción `"Modificar Factura"` al menú.
- [ ] Crear un nuevo `case` en el `switch`.
- [ ] Dentro del `case`, mostrar todas las facturas actuales con su ID.
- [ ] Pedir al usuario el ID de la factura a modificar.
- [ ] Buscar el objeto correspondiente en el array `$todasLasFacturas`.
- [ ] Pedir al usuario el nuevo dato (por ejemplo, el nuevo consumo).
- [ ] Usar los métodos `set...()` (ej: `setKilowats()`) para actualizar el objeto.
- [ ] **Importante:** Volver a llamar al método `calcularTotal()` en el objeto modificado para actualizar el monto.

---

### 3. DELETE (Eliminar Factura)

- [ ] Añadir la opción `"Eliminar Factura"` al menú.
- [ ] Crear un nuevo `case` en el `switch`.
- [ ] Dentro del `case`, mostrar todas las facturas actuales con su ID.
- [ ] Pedir al usuario el ID de la factura a eliminar.
- [ ] Buscar el objeto en el array `$todasLasFacturas` y obtener su índice (`$indice`).
- [ ] Eliminar el elemento del array usando `unset($todasLasFacturas[$indice]);`.
- [ ] (Opcional) Re-indexar el array con `$todasLasFacturas = array_values($todasLasFacturas);`.
