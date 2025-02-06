import TableHeader from "../../components/common/table-header/TableHeader";
import TableBodyCustomers from "../../components/ui/table-raw/TableBodyCustomers";
import Table from "../../components/ui/table/Table";
import TablePagination from "../../components/ui/table-pagination/TablePagination";

export default function AdminCustomers() {
  return (
    <div className="table-dash">
      <TableHeader PageTitle={"Customers"} />
      <Table PageTitle={"Customers"}>
        <TableBodyCustomers />
        <TableBodyCustomers />
        <TableBodyCustomers />
        <TableBodyCustomers />
        <TableBodyCustomers />
        <TableBodyCustomers />
        <TableBodyCustomers />
        <TableBodyCustomers />
      </Table>
      <TablePagination />
    </div>
  );
}
