import TableHeader from "../../components/common/table-header/TableHeader";
import TablePagination from "../../components/ui/table-pagination/TablePagination";
import TableBodyProducts from "../../components/ui/table-raw/TableBodyProducts";
import Table from "../../components/ui/table/Table";

export default function AdminProducts() {
  return (
    <div className="table-dash">
      <TableHeader PageTitle={"Products"}>
        <button>Add Product</button>
      </TableHeader>
      <Table PageTitle={"Products"}>
        <TableBodyProducts />
        <TableBodyProducts />
        <TableBodyProducts />
        <TableBodyProducts />
        <TableBodyProducts />
        <TableBodyProducts />
        <TableBodyProducts />
        <TableBodyProducts />
      </Table>
      <TablePagination />
    </div>
  );
}
