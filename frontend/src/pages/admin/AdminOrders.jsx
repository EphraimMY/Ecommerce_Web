import TableHeader from "../../components/common/table-header/TableHeader";
import TablePagination from "../../components/ui/table-pagination/TablePagination";
import TableBodyRaw from "../../components/ui/table-raw/TableBodyRaw";
import Table from "../../components/ui/table/Table";
export default function AdminOrders() {
  return (
    <div className="table-dash">
      <TableHeader PageTitle={"Orders"} />
      <Table PageTitle={"Orders"}>
        <TableBodyRaw />
        <TableBodyRaw />
        <TableBodyRaw />
        <TableBodyRaw />
        <TableBodyRaw />
        <TableBodyRaw />
        <TableBodyRaw />
        <TableBodyRaw />
      </Table>
      <TablePagination />
    </div>
  );
}
