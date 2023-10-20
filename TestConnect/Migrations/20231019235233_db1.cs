using System;
using Microsoft.EntityFrameworkCore.Migrations;

#nullable disable

namespace TestConnectDB.Migrations
{
    /// <inheritdoc />
    public partial class db1 : Migration
    {
        /// <inheritdoc />
        protected override void Up(MigrationBuilder migrationBuilder)
        {
            migrationBuilder.CreateTable(
                name: "Sotrudnik",
                columns: table => new
                {
                    Id = table.Column<int>(type: "int", nullable: false)
                        .Annotation("SqlServer:Identity", "1, 1"),
                    Fio = table.Column<string>(type: "nvarchar(max)", nullable: false),
                    Dater = table.Column<DateTime>(type: "datetime2", nullable: false),
                    Pol = table.Column<bool>(type: "bit", nullable: false)
                },
                constraints: table =>
                {
                    table.PrimaryKey("PK_Sotrudnik", x => x.Id);
                });

            migrationBuilder.CreateTable(
                name: "Comment",
                columns: table => new
                {
                    Id = table.Column<int>(type: "int", nullable: false)
                        .Annotation("SqlServer:Identity", "1, 1"),
                    SotrudnikIdId = table.Column<int>(type: "int", nullable: false),
                    CommentsWork = table.Column<string>(type: "nvarchar(max)", nullable: false)
                },
                constraints: table =>
                {
                    table.PrimaryKey("PK_Comment", x => x.Id);
                    table.ForeignKey(
                        name: "FK_Comment_Sotrudnik_SotrudnikIdId",
                        column: x => x.SotrudnikIdId,
                        principalTable: "Sotrudnik",
                        principalColumn: "Id",
                        onDelete: ReferentialAction.Cascade);
                });

            migrationBuilder.CreateTable(
                name: "Staj",
                columns: table => new
                {
                    Id = table.Column<int>(type: "int", nullable: false)
                        .Annotation("SqlServer:Identity", "1, 1"),
                    SotrudnikIdId = table.Column<int>(type: "int", nullable: false),
                    BeginWorkSotrudnik = table.Column<DateTime>(type: "datetime2", nullable: false),
                    EndWorkSotrudnik = table.Column<DateTime>(type: "datetime2", nullable: false),
                    GosWorkSotrudnik = table.Column<DateTime>(type: "datetime2", nullable: false)
                },
                constraints: table =>
                {
                    table.PrimaryKey("PK_Staj", x => x.Id);
                    table.ForeignKey(
                        name: "FK_Staj_Sotrudnik_SotrudnikIdId",
                        column: x => x.SotrudnikIdId,
                        principalTable: "Sotrudnik",
                        principalColumn: "Id",
                        onDelete: ReferentialAction.Cascade);
                });

            migrationBuilder.CreateTable(
                name: "Report",
                columns: table => new
                {
                    Id = table.Column<int>(type: "int", nullable: false)
                        .Annotation("SqlServer:Identity", "1, 1"),
                    StajIdId = table.Column<int>(type: "int", nullable: false),
                    Nomerreport = table.Column<string>(type: "nvarchar(max)", nullable: false)
                },
                constraints: table =>
                {
                    table.PrimaryKey("PK_Report", x => x.Id);
                    table.ForeignKey(
                        name: "FK_Report_Staj_StajIdId",
                        column: x => x.StajIdId,
                        principalTable: "Staj",
                        principalColumn: "Id",
                        onDelete: ReferentialAction.Cascade);
                });

            migrationBuilder.CreateIndex(
                name: "IX_Comment_SotrudnikIdId",
                table: "Comment",
                column: "SotrudnikIdId");

            migrationBuilder.CreateIndex(
                name: "IX_Report_StajIdId",
                table: "Report",
                column: "StajIdId");

            migrationBuilder.CreateIndex(
                name: "IX_Staj_SotrudnikIdId",
                table: "Staj",
                column: "SotrudnikIdId");
        }

        /// <inheritdoc />
        protected override void Down(MigrationBuilder migrationBuilder)
        {
            migrationBuilder.DropTable(
                name: "Comment");

            migrationBuilder.DropTable(
                name: "Report");

            migrationBuilder.DropTable(
                name: "Staj");

            migrationBuilder.DropTable(
                name: "Sotrudnik");
        }
    }
}
